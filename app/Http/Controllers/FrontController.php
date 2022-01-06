<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function profil(){
        return view('profilperangkatdaerah.profil');
    }

    public function create(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);
        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New post has ben added!');
    }
}
