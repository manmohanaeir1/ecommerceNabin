<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categories = ProductCategory::all();
         return view('admin.product.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::where('parent_id', 0)->get();
        return view ('admin.product.category.add', compact('categories'));
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
        'name' => 'required|max:255',
        'order' => 'required',
    ];
    $customMessages = [
        'name.required' => 'Category name is required',
        'name.max' => 'You are not allowed to enter more than 255 characters',
        'order.required' => 'Please define priority order',
    ];
    $this->validate($request, $rules, $customMessages);

    $slug = Str::slug($data['name']);
    $categoryCount = ProductCategory::where('slug', $slug)->count();

    if($categoryCount > 0){
        Session::flash('error_message', 'Category name already exists in our database');
        return redirect()->back();
    }

    $category = new ProductCategory();
    $category->name = ucwords(strtolower($data['name']));
    $category->slug = Str::slug($data['name']);
    $category->parent_id = $data['parent_id'];
    $category->order = $data['order'];
   // status
   if (!empty($data['status'])) {
    $category->status = 'Published';
} else {
    $category->status = 'Draft';
}



    $category->save();
    Session::flash('success_message', 'Category Has Been Added Successfully');
    return redirect()->back();
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory , $id)
    {       $productCategory = ProductCategory::find($id);
        $categories = ProductCategory::where('parent_id', 0)->get();
        return view ('admin.product.category.edit', compact('categories', 'productCategory'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productCategory , $id)
    {
        $data = $request->all();
        $rules = [
            'name' => 'required|max:255',
            'order' => 'required',
        ];
        $customMessages = [
            'name.required' => 'Category name is required',
            'name.max' => 'You are not allowed to enter more than 255 characters',
            'order.required' => 'Please define priority order',
        ];
        $this->validate($request, $rules, $customMessages );

        $slug = Str::slug($data['name']);


        $category = ProductCategory::findOrFail($id);
        $category->name = ucwords(strtolower($data['name']));
        $category->slug = Str::slug($data['name']);
        $category->parent_id = $data['parent_id'];
        $category->order = $data['order'];

        if (!empty($data['status'])) {
            $category->status = 'Published';
        } else {
            $category->status = 'Draft';
        }
        

        $category->save();
        Session::flash('success_message', 'Category Has Been Updated Successfully');
        return redirect()->back();
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory ,$id)

    {
       $productCategory = ProductCategory::find($id);
         $productCategory->delete();
            Session::flash('success_message', 'Category Has Been Deleted Successfully');
            return redirect()->back();
        
            
            
       
        
    }
}


