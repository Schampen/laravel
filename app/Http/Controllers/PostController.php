<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PostController extends Controller 

{
    public function show($slug)
    {
        $post = DB::table('post')->where('slug', $slug)->first();

        return view('post', [
            'post' => $post
        ]);
    }
}