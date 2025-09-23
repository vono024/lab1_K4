<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function index(){ return view('blog.index'); }
    public function show($id){ return view('blog.show', compact('id')); }
    public function create(){ return view('blog.create'); }
}

