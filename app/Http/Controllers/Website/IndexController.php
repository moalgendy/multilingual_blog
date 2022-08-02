<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $categories_with_posts = Category::with(['posts'=>function($query){
            $query->latest()->limit(2);
        }])->get();
        return view('website.index' , compact('categories_with_posts'));
    }


    // public function search( Request $request) {

    //     $request->validate([

    //         'search' => 'required'
    //     ]);


    //     $search = $request->search;

    //     $filteredUsers = Post::where('title', 'like', '%' . $search . '%')
    //                             ->orWhere('content', 'like', '%' . $search . '%')->get();

    //     if ($filteredUsers->count()) {

    //         return view('website.index')->with([
    //             'users' =>  $filteredUsers
    //         ]);
    //     } else {
            
            // return redirect('/users')->with([
            //     'status' => 'search failed ,, please try again'
            // ]);
    //     }
        
    // }
}