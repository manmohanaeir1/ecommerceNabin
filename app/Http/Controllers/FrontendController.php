<?php

namespace App\Http\Controllers;

 
use App\Models\ProductPhotoList;
use App\Models\ProductCategory;
use App\Models\Photo;
use App\Models\Photo_list;
use App\Models\Product;




use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;
use Illuminate\Pagination\Paginator;

class FrontendController extends Controller
{
    public function home(){
        // for slider(photo) 
        $photos = Photo::all();
        // photo list
        $photo_lists = Photo_list::inRandomOrder()->limit(2)->get();

        // get all products

        $products = Product::all();

        // get all product category 
        $categories = ProductCategory::all();

        


        return view('frontend.home' , compact('photos' , 'photo_lists','products', 'categories'));
    }

    public function about(){


        return view('frontend.pages.about');
         

    }

    public function shop(){

        // get all categories parents and subcategories
        $categories = ProductCategory::where('parent_id' , 0)->get();
        // only which has parent id 0
        $subcategories = ProductCategory::where('parent_id' , '!=' , 0)->get();

    
        // get all products
        $products = Product::paginate(6);

        // get all products rendom 4
        $randomproducts = Product::inRandomOrder()->limit(4)->get();

      // get brand from product table
        $brands = Product::select('brand')->distinct()->limit(4)->get();



        

    return  view('frontend.pages.shop' , compact('categories'   , 'subcategories' , 'products' , 'randomproducts' , 'brands'));
    
    }

    // for contact-us
    public function contact(){
        return view('frontend.pages.contact-us');
    }

    //for single product 

    public function singleproduct($id){
       // get product by id
        $product = Product::find($id);

        // get all productsphotolist by product id form productphotolist table
        $productphotolists = ProductPhotoList::where('product_id' , $id)->limit(4)->get(); 

        //popular product random 4
        $popularproduct = Product::inRandomOrder()->limit(6)->get();

        // get all product related to that product category using id
        $productcategory = Product::where('category_id' , $product->category_id)->limit(8)->get();

        
        return view('frontend.pages.singleproduct' , compact('product' , 'productphotolists', 'popularproduct', 'productcategory'));


        
    }


   

    
}
