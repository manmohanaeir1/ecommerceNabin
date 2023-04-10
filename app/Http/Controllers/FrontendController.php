<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Tag;
use App\Models\post_tags;
use App\Models\Category;
use App\Models\CourseCategory;
use App\Models\Course;
use App\Models\CourseCurriculum;
use App\Models\Download;

use App\Models\Photo;
use App\Models\Photo_list;
use App\Models\Product;
use App\Models\Video;


use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;
use Illuminate\Pagination\Paginator;

class FrontendController extends Controller
{
    public function home(){
        // for slider(photo) 
        $photos = Photo::all();
        // photo list
        $photo_lists = Photo_list::all();

        // get all products

        $products = Product::all();


        return view('frontend.home' , compact('photos' , 'photo_lists','products'));
    }

    public function about(){


        return view('frontend.pages.about');
         

    }

    public function shop(){
    return  view('frontend.pages.shop');
    }

    // for contact-us
    public function contact(){
        return view('frontend.pages.contact-us');
    }

    //for single product 

    public function singlePproduct(){
        
    }


   

    
}
