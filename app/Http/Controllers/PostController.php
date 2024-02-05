<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index()
    {
        Carbon::setLocale('id');
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' di ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' oleh ' . $author->name;
        }

        return view('home/posts/index', [
            "title" => "Informasi" . $title,
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
            "profiles" => Profile::all(),
            "categories" => Category::all(),
            'image' => 'default.jpg'
        ]);
    }

    public function show(Post $post)
    {
        return view('home/posts/show', [
            "title" => "Informasi",
            "post" => $post,
            "profiles" => Profile::all(),
            'image' => 'default.jpg'
        ]);
    }
}
