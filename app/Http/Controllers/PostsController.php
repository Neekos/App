<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PostsController extends Controller
{
    public function index(){
    	// Вызываем метод пагинации и количество отображаемых записей
    	$posts = App\Post::paginate(1);
    	return view('posts.index', compact('posts'));
    }

    public function show($id){
    	$post = App\Post::find($id);
    	return view('posts.show', compact('post'));
    }
}
