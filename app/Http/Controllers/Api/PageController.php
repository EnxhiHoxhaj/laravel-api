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

        $works= Post::orderBy('id', 'desc')->get();
        $succsess= true;
        $response= [
            'succsess'=>$succsess,
            'results'=>$works,
        ];
        return response()->json($response);
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

    public function allTypes(){

        $types= tag::orderBy('id', 'desc')->get();
        $succsess= true;
        $response= [
            'succsess'=>$succsess,
            'results'=>$types,
        ];
        return response()->json($response);
    }
}
