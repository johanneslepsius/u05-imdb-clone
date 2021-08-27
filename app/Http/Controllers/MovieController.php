<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;


class MovieController extends Controller
{
    public function index() {
        return view('movies.index', ['movies' => DB::table('movies')->paginate(12)]);
    }

    public function show($id) {
        return view('movies.show', ['movie' => Movie::find($id)]);
    }
}
