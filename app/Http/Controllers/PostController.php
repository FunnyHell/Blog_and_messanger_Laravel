<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request){
        if(Post::store($request)) return redirect(route('dashboard'));
        else echo 'error';
    }
}
