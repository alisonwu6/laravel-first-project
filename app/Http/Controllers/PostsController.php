<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index() {


        // $posts = DB::select('select * from posts WHERE id = ?', [3]);
        // $posts = DB::select('select * from posts WHERE id = :id', ['id' => 3]);


        // chain methods together to build a query
        $id = 3;
        // $posts = DB::table('posts')
        //     ->where('id', $id)
        //     ->get();

        // $posts = DB::table('posts')
        //     ->select('body')
        //     ->get();

        // $posts = DB::table('posts')
        //     ->where('created_at', '>', now()->subDay())
        //     ->orWhere('title', 'Prof.')
        //     ->get();
        
        // $posts = DB::table('posts')
        //     ->whereBetween('id', [1,2])
        //     ->get();

        // $posts = DB::table('posts')
        //     ->whereNotNull('title')
        //     ->get();

        // $posts = DB::table('posts')
        //     ->select('title')
        //     ->distinct()
        //     ->get();

        // $posts = DB::table('posts')
        //     ->orderBy('title', 'asc')
        //     ->get();

        // $posts = DB::table('posts')
        //     // ->latest()  
        //     // ->oldest()   
        //     ->inRandomOrder()
        //     ->get();

        // $posts = DB::table('posts')
            // ->insert(['title' => 'New Title', 'body' =>'New BOdy']);  // true

        // $posts = DB::table('posts')
        //     ->where('id', "=", 6)
        //     -> update(['title' => 'Hello', 'body' => 'This is my day.']);   // 1   (true)

        // $posts = DB::table('posts')
        //     ->where('id', "=", 4)
        //     -> delete();

        $posts = DB::table('posts')
            ->get();
        
        dd($posts);
    }
}
