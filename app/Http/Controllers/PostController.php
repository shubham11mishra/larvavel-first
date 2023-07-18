<?php

namespace App\Http\Controllers;

use App\Models\post;
use Inertia\Inertia;
use App\Http\Requests\StorepostRequest;
use App\Http\Requests\UpdatepostRequest;
use App\Models\postcategory;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return  post::with('postcategory', 'user')->paginate(10)->through(
        //     function ($post) {
        //         return [
        //             'id' => $post->id,
        //             'title' => $post->title,
        //             'body' => $post->body,
        //             'created_at' => $post->created_at,
        //             'category' => [
        //                 'id' => $post->postcategory->id,
        //                 'title' => $post->postcategory->title
        //             ],
        //             'user' => [
        //                 'id' => $post->user->id,
        //                 'name' => $post->user->name
        //             ]
        //         ];
        //     }
        // );
        return Inertia::render('Posts', [

            'posts' => post::with('postcategory', 'user')->paginate(15)->through(
                function ($post) {
                    return [
                        'id' => $post->id,
                        'title' => $post->title,
                        'body' => $post->body,
                        'created_at' => $post->created_at,
                        'category' => [
                            'id' => $post->postcategory->id,
                            'title' => $post->postcategory->title
                        ],
                        'user' => [
                            'id' => $post->user->id,
                            'name' => $post->user->name
                        ]
                    ];
                }
            ),
            'categoty' => postcategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepostRequest $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}
