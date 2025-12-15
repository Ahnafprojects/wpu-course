<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home' ,['title' =>'Home Page']);
});

Route::get('/posts', function () {
    $query = Post::with(['category', 'author'])->latest();
    
    // Handle search functionality
    if (request('search')) {
        $search = request('search');
        $query->where(function($q) use ($search) {
            $q->where('title', 'like', '%' . $search . '%')
              ->orWhere('body', 'like', '%' . $search . '%')
              ->orWhereHas('author', function($authorQuery) use ($search) {
                  $authorQuery->where('name', 'like', '%' . $search . '%');
              })
              ->orWhereHas('category', function($categoryQuery) use ($search) {
                  $categoryQuery->where('name', 'like', '%' . $search . '%');
              });
        });
    }
    
    $posts = $query->get();
    
    // Dynamic title based on search
    $title = request('search') 
        ? 'Search results for "' . request('search') . '" (' . count($posts) . ' articles found)'
        : 'Blog';
    
    return view('posts', ['title' => $title, 'posts' => $posts]);
}); 

Route::get('/posts/{post:slug}', function (Post $post) {
    
    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/authors/{user:username}', function (User $user) {
    $posts = $user->posts()->with(['category', 'author'])->latest()->get();
    
    return view('posts', [
        'title' => count($posts) . ' Articles by ' . $user->name, 
        'posts' => $posts
    ]);
}); 

Route::get('/about', function () {
    return view('about', ['title' => 'About ']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
}); 

Route::get('/categories/{category:slug}', function (Category $category) {
    $posts = $category->posts()->with(['category', 'author'])->latest()->get();
    
    return view('posts', [
        'title' => count($posts) . ' Articles in ' . $category->name, 
        'posts' => $posts
    ]);
}); 


