<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TwitterController;
use App\Models\media;
use App\Models\post;
use App\Models\postcategory;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Index', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');


Route::get('/secondlayout', function () {
    return Inertia::render('Secondlayout', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.all');

Route::post('/test', function () {
    return redirect()->back()->with('toast', [
        'title' => 'hi there2',
        'type' => 'danger'
    ]);
});

Route::get('/orm', function () {
    dump([
        '2' => post::where('title', 'like', '%a%')
            ->orderBy('title')
            ->take(10)
            ->get(),

    ]);
});

Route::get('/fileupload', function () {

    return Inertia::render('FileUpload');
});

Route::get('/media', function () {
    return Inertia::render('IndexMedia');
})->middleware(['auth', 'verified'])->name('media.index');

Route::post('/media', function () {
    request()->validate([
        'file' => ['file', 'max:512000']
    ]);
    $file = request()->file('file');
    $media =  media::create([
        'name' => $file->getClientOriginalName(),
        'file_name' => $file->getClientOriginalName(),
        'mime_type' => $file->getMimeType(),
        'size' => $file->getSize(),
        'author_id' => auth()->id()
    ]);
    $dir = "media/{$media->created_at->format('Y/m/d')}/{$media->id}";
    $file->storeAs($dir, $media->file_name, 'public');
    return [
        'id' => $media->id,
        'preview_url' => url("storage/{$dir}/{$media->file_name}")
    ];
})->name('media.store');


// crisp
Route::resource('chirps', ChirpController::class)->only(['index', 'store', 'update', 'destroy'])->middleware(['auth', 'verified']);

Route::resource('twitter', TwitterController::class)->only(['index']);


require __DIR__ . '/auth.php';
