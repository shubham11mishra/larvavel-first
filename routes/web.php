<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('/secondlayout', function () {
    return Inertia::render('Secondlayout', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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
    ddd( [
        
        '2' => post::where('title', 'like', '%a%')
            ->orderBy('title')
            ->take(10)
            ->get(),
        'single column' => User::where('name','like','%a%')->orderBy('id','desc')->pluck('email','name')->get(),
        'join' => User::leftJoin('posts', 'users.id', '=', 'posts.user_id')->get(),
    ]);
});

require __DIR__ . '/auth.php';
