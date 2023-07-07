<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Restaurant::with('comments.user')->paginate();
        // dd($data);

        return view('index', [
            'data' => $data
        ]);
    }
}
