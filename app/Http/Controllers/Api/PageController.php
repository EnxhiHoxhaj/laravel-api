<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class PageController extends Controller
{
    public function allPosts(){

        $posts= Post::orderBy('id', 'desc')->get();
        $succsess= true;
        $response= [
            'succsess'=>$succsess,
            'results'=>$posts,
        ];
        return response()->json($response);
    }
    public function allCategories(){

        $categories= Category::orderBy('id', 'desc')->get();
        $succsess= true;
        $response= [
            'succsess'=>$succsess,
            'results'=>$categories,
        ];
        return response()->json($response);
    }

    public function allTags(){

        $tags= tag::orderBy('id', 'desc')->get();
        $succsess= true;
        $response= [
            'succsess'=>$succsess,
            'results'=>$tags,
        ];
        return response()->json($response);
    }
}
