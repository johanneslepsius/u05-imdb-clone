<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;


class MovieController extends Controller
{
    public function index() {
        $movies = DB::table('movies')->get();
        return view('movies.index', compact('movies'));
    }

    public function show($id) {
        $movie = Movie::find($id)
        return view('movies.show', ['movie' => $movie]);
    }
}
