<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Festival;
use App\Models\UserReview;
use App\Models\Culture;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $festivals = Festival::all();
        $reviews = UserReview::all();
        $cultures = Culture::all();

        return view('welcome', compact('festivals', 'reviews', 'cultures'));
    }
}
