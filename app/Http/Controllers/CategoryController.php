<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Exports\CategoryExport;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use DataTables;
use Excel;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        $category = Category::all();
        return view('admin.blogs.category.index', compact('category'));
        
    }


    // Add Category
    public function add(){
        $categories = Category::where('parent_id', 0)->get();
        return view ('admin.blogs.category.add', compact('categories'));
    }


   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
    $data = $request->all();
    $rules = [
        'category_name' => 'required|max:255',
        'order' => 'required',
    ];
    $customMessages = [
        'category_name.required' => 'Category name is required',
        'category_name.max' => 'You are not allowed to enter more than 255 characters',
        'order.required' => 'Please define priority order',
    ];
    $this->validate($request, $rules, $customMessages);

    $slug = Str::slug($data['category_name']);
    $categoryCount = Category::where('slug', $slug)->count();

    if($categoryCount > 0){
        Session::flash('error_message', 'Category name already exists in our database');
        return redirect()->back();
    }

    $category = new Category();
    $category->category_name = ucwords(strtolower($data['category_name']));
    $category->slug = Str::slug($data['category_name']);
    $category->parent_id = $data['parent_id'];
    $category->order = $data['order'];
    if($data['status'] == 1){
        $category->status = 1;
    } else {
        $category->status = 0;
    }
    $category->save();
    Session::flash('success_message', 'Category Has Been Added Successfully');
    return redirect()->back();
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.blogs.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catData = Category::findOrFail($id);
        $categories = Category::where('parent_id', 0)->get();
        return view('admin.blogs.category.edit', compact('catData', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
    $data = $request->all();
        $rules = [
            'category_name' => 'required|max:255',
            'order' => 'required',
        ];
        $customMessages = [
            'category_name.required' => 'Category name is required',
            'category_name.max' => 'You are not allowed to enter more than 255 characters',
            'order.required' => 'Please define priority order',
        ];
        $this->validate($request, $rules, $customMessages);

        $slug = Str::slug($data['category_name']);


        $category = Category::findOrFail($id);
        $category->category_name = ucwords(strtolower($data['category_name']));
        $category->slug = Str::slug($data['category_name']);
        $category->parent_id = $data['parent_id'];
        $category->order = $data['order'];

        if(!empty($data['status'])){
            $category->status = 1;
        } else {
            $category->status = 0;
        }

        $category->save();
        Session::flash('success_message', 'Category Has Been Updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        Session::flash('success_message', 'Category Has Been Deleted Successfully');
        return redirect()->back();
        
    }
}
