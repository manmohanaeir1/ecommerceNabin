<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductPhotoList;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
            
        return view('admin.product.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dropdown for categories
        $categories = ProductCategory::where('parent_id', 0)->get();
        $categories_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($categories as $cat){
            $categories_dropdown .= "<option value='".$cat->id."'>".$cat->name."</option>";
            $sub_categories = ProductCategory::where('parent_id', $cat->id)->get();
            foreach($sub_categories as $sub_cat){
                $categories_dropdown .= "<option value='".$sub_cat->id."'>&nbsp;--&nbsp;".$sub_cat->name."</option>";
            }
        }

        
        return view('admin.product.product.add', compact('categories_dropdown'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $data = $request->all();
        $rules = [
            'title' => 'required|max:255',
            'brand' => 'required|max:200',
            'category_id' => 'required',
            'thumbnail' => 'required  | mimes:jpeg,jpg,png,gif | max:6000',
            
            'short_description' => 'required| max:255',
            'description' => 'required',
            'price' => 'required',
            
            'new_price' => 'required',
                ];
        $customMessages = [
            'title.required' => 'Product title is required',
            'brand.required' => 'Brand is required',
            'brand.max' => 'You are not allowed to enter more than 200 characters',
            'title.max' => 'You are not allowed to enter more than 255 characters',
            'category_id.required' => 'Please select a category',
            'thumbnail.required' => 'Please select a thumbnail',
            'thumbnail.mimes' => 'Please select a valid image file',
            'thumbnail.max' => 'Image size should not be more than 6MB',
            'short_description.required' => 'Short description is required',
            'short_description.max' => 'You are not allowed to enter more than 255 characters',
            'description.required' => 'Description is required',
            'price.required' => 'Price is required',
            'new_price.required' => 'New price is required',


        ];

        $this->validate($request, $rules, $customMessages);

        $data['slug'] = Str::slug($data['title']);
        $data =Product::create($data);

        if(!empty($data['status'])){
            $data->status = "Published";
        } else {
            $data->status = "Draft";

        }


        if ($thumbnail = $request->file('thumbnail')) {
            $destinationPath = 'uploads/products/thumbnail/';
            $Upload_thumbnail = date('YmdHis') . "_" . $thumbnail->getClientOriginalName();
            $thumbnail->move($destinationPath, $Upload_thumbnail);
            $data['thumbnail'] = "$Upload_thumbnail";
            $data->thumbnail = $data['thumbnail'];
        }

        $data->save();

       // for attach multiple image in database

       if ($request->hasfile('image')) {
        $images = array();
        foreach ($request->file('image') as $image) {
            $destinationPath = 'uploads/products/photos/';
            $Upload_image = date('YmdHis') . "_" . $image
            ->getClientOriginalName();
            $image->move($destinationPath, $Upload_image);
            $images[] = $Upload_image;
            
            $product_list = new ProductPhotoList();
            $product_list->product_id = $data->id;
            $product_list->image = $Upload_image;
            $product_list->save();
        }
    }
        $data->save();
    Session::flash('success_message', 'photo added successfully');
    return redirect()->route('product.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)

    {
        $product = Product:: findOrfail($product->id);

        //selected category

        $categories = ProductCategory::where('parent_id', 0)->get();
        $categories_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($categories as $cat){
            if($cat->id == $product->category_id){
                $selected = "selected";
            } else {
                $selected = "";
            }
            $categories_dropdown .= "<option value='".$cat->id."' ".$selected.">".$cat->name."</option>";
            $sub_categories = ProductCategory::where('parent_id', $cat->id)->get();
            foreach($sub_categories as $sub_cat){
                if($sub_cat->id == $product->category_id){
                    $selected = "selected";
                } else {
                    $selected = "";
                }
                $categories_dropdown .= "<option value='".$sub_cat->id."' ".$selected.">&nbsp;--&nbsp;".$sub_cat->name."</option>";
            }
        }

        return view('admin.product.product.edit', compact('product', 'categories_dropdown'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
           
        $data = $request->all();
        $rules = [
            'title' => 'required|max:255',
            'brand' => 'required|max:200',

            'category_id' => 'required',
            'thumbnail' => 'sometimes  | mimes:jpeg,jpg,png,gif | max:6000',
            'short_description' => 'required| max:255',
            'description' => 'required',
            'price' => 'required',
            
            'new_price' => 'required',
                ];
        $customMessages = [
            'title.required' => 'Product title is required',
            'brand.required' => 'Brand is required',
            'brand.max' => 'You are not allowed to enter more than 200 characters',
            'title.max' => 'You are not allowed to enter more than 255 characters',
            'category_id.required' => 'Please select a category',
            'thumbnail.required' => 'Please select a thumbnail',
            'thumbnail.mimes' => 'Please select a valid image file',
            'thumbnail.max' => 'Image size should not be more than 6MB',
            'short_description.required' => 'Short description is required',
            'short_description.max' => 'You are not allowed to enter more than 255 characters',
            'description.required' => 'Description is required',
            'price.required' => 'Price is required',
            'new_price.required' => 'New price is required',


        ];

        $this->validate($request, $rules, $customMessages);

        $data['slug'] = Str::slug($data['title']);
        // for update
        $data =Product::find($product->id);
        $data->update($request->all());
        


        if(!empty($data['status'])){
            $data->status = "Published";
        } else {
            $data->status = "Draft";

        }


        if ($thumbnail = $request->file('thumbnail')) {
            $destinationPath = 'uploads/products/thumbnail/';
            $Upload_thumbnail = date('YmdHis') . "_" . $thumbnail->getClientOriginalName();
            $thumbnail->move($destinationPath, $Upload_thumbnail);
            $data['thumbnail'] = "$Upload_thumbnail";
            $data->thumbnail = $data['thumbnail'];
        }

        $data->save();

       // for attach multiple image in database

       if ($request->hasfile('image')) {
        $images = array();
        foreach ($request->file('image') as $image) {
            $destinationPath = 'uploads/products/photos/';
            $Upload_image = date('YmdHis') . "_" . $image
            ->getClientOriginalName();
            $image->move($destinationPath, $Upload_image);
            $images[] = $Upload_image;
            
            $product_list = new ProductPhotoList();
            $product_list->product_id = $data->id;
            $product_list->image = $Upload_image;
            $product_list->save();
        }
    }
    $data->update();
    Session::flash('success_message', 'photo added successfully');
    return redirect()->route('product.index');

 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
                
            if(!empty($product->thumbnail)){
                $image_path = public_path().'/uploads/products/thumbnail/'.$product->thumbnail;
                unlink($image_path);
            }
    
            if(!empty($product->image)){
                $image_path = public_path().'/uploads/products/photos/'.$product->image;
                unlink($image_path);
            }
    
            $product->delete();
            Session::flash('success_message', 'Product has been deleted successfully');
            return redirect()->route('product.index');
        
    }
}
