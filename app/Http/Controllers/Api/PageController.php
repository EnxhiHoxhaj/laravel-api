<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class PageController extends Controller
{
    public function allWorks(){

        $works= Post::orderBy('id', 'desc')->with('category', 'tags')->paginate(10);
        $succsess= true;
        $response= [
            'succsess'=>$succsess,
            'results'=>$works,
        ];
        return response()->json($response);
    }

    public function postBySlug($slug) {

        $post = Post::where('slug', $slug)->with('category', 'tags')->first();
        if($post){
            $succsess = true;
        // if($post->path_image){
        //     $post->path_image=asset('storage/'.$post->path_image);
        // }else{
        //     $post->path_image='/img/no-image.jpg';
        //     $post->image_original_name= 'no image';
        // }
        } else {
            $succsess= false;
        }

        return response()->json(compact('succsess', 'post'));
    }

    public function allTechnologies(){

        $technologies= Category::orderBy('id', 'desc')->get();
        $succsess= true;
        $response= [
            'succsess'=>$succsess,
            'results'=>$technologies,
        ];
        return response()->json($response);
    }

    public function postByTecnologies($slug){
        $category = Category::where('slug', $slug)->with('posts')->first();
        if($category ){
            $succsess = true;
        } else {
            $succsess= false;
        }
        return response()->json(compact('succsess', 'category'));
    }

    public function allTypes(){

        $types= Tag::orderBy('id', 'desc')->get();
        $succsess= true;
        $response= [
            'succsess'=>$succsess,
            'results'=>$types,
        ];
        return response()->json($response);
    }
    public function postByTypes($slug){
        $types = Tag::where('slug', $slug)->with('posts')->first();

        // foreach($types->posts as $post){
        //     $post->category_name=$post->category->name;
        // }

        if($types){
            $succsess = true;
        } else {
            $succsess= false;
        }
        return response()->json(compact('succsess', 'types'));
    }

}
