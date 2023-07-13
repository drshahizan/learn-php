<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserReview;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function viewReviews()
    {
        $reviews = UserReview::where('user_id', Auth::id())->get();

        return view('user.review', compact('reviews'));
    }   

    public function addReview(Request $request)
    {
        $request->validate([
            'review' => 'required',
        ]);

        UserReview::create([
            'user_id' => Auth::id(),
            'review' => $request->input('review'),
        ]);

        return redirect()->route('user.reviews')->with('status', 'Review added successfully!');
    }

    public function deleteReview($id)
    {
        $review = UserReview::find($id);

        if(Auth::id() !== $review->user_id) {
            return redirect()->route('user.reviews')->with('error', 'You cannot delete a review that you did not create.');
        }

        $review->delete();

        return redirect()->route('user.reviews')->with('status', 'Review deleted successfully!');
    }
}
