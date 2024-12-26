<?php

namespace App\Http\Controllers;
use App\Models\post;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::all();
        $posts = $posts = Post::when(request('category_id'), function ($query) {
            $query->where('category_id', request('category_id'));
        })->latest()->get();;
        return view('home' ,compact('categories' , 'posts') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}
