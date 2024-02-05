<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('dashboard/allposts/index', [
            "allposts" => Post::all(),
            'image' => 'default.jpg'
        ]);
    }

    public function show(Post $post)
    {
        return view('dashboard/allposts/show', [
            "allpost" => $post,
            'image' => 'default.jpg'
        ]);
    }

    public function destroy(Post $post)
    {
        if (File::exists(public_path('img/post-images/' . $post->image))) {
            File::delete(public_path('img/post-images/' . $post->image));
        }
        Post::destroy($post->id);
        return redirect('/dashboard/allposts')->with('success', 'Postingan telah dihapus');
    }
}
