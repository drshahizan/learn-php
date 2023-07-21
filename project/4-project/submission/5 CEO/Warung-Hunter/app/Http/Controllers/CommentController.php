<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Restaurant $restaurant)
    {
        $restaurant->load('comments.user');

        return $restaurant->comments;
    }

    public function store(Restaurant $restaurant, Request $request)
    {
        return $restaurant->comments()->create([
            'user_id' => auth()->id(),
            'comment' => $request->input('comment'),
            'rating' => $request->input('rating')
        ]);
    }
}
