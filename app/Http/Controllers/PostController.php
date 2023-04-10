<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;



use DataTables;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.blogs.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where(['parent_id' => 0])->get();
        $categories_dropdown = "<option selected disabled> Select Category </option>";
        foreach ($categories as $cat){
            $categories_dropdown .= "<option value=' ". $cat->id ." '> ". $cat->category_name ." </option>";
            $sub_categories = Category::where('parent_id', $cat->id)->get();
            foreach ($sub_categories as $sub_cat){
                $categories_dropdown .= "<option value='". $sub_cat->id ."'>  &nbsp; &nbsp; ---- ". $sub_cat->category_name ."</option>";
            }
        }
        $tags = Tag::all();
        return view('admin.blogs.post.add', compact('categories_dropdown', 'tags'));

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
            'post_title' => 'required|max:255',
            'post_content' => 'required',
            'category_id' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048:',
            'tag_id' => 'required',


        ];
        $customMessages = [
            'post_title.required' => 'Post Title is required',
            'post_title.max' => 'You are not allowed to enter more than 255 characters',
            'post_content.required' => 'Post Content is required',
            'category_id.required' => 'Category is required',
            'image.image' => 'Please upload a valid image',
            'image.mimes' => 'Please upload a valid image',
            'image.max' => 'Image size should not be more than 2MB',
            'tag_id.required' => 'Tag is required',
            
        ];
        $this->validate($request, $rules, $customMessages);
        $post = new Post();
        $post->post_title = $data['post_title'];
        $post->slug = Str::slug($data['post_title']);
        $post->category_id = $data['category_id'];
        if(!empty($data['post_content'])){
            $post->post_content = $data['post_content'];
        } else {
            $post->post_content = "";
        }

        // if($image = $request->file('image')){
        //     $image_name = rand(111, 99999) . '.' . $image->getClientOriginalExtension();
        //     $path ='/posts' . $image_name;
        //     $image->move($path, $image_name);
        //     $post->image = $image_name;
        // }


        // storeAs

        // if ($request->has('image')) {
        //     //store file in disk
        //     $imagepath = $request->file('image')->storeAs('posts', rand(0, 999) . '' . $request->file('image')->getClientOriginalName());
        //     //saving file in database
        //     $post->image = $imagepath;

        // }

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/posts/';
            $Upload_image = date('YmdHis') . "_" . $image->getClientOriginalName();
            $image->move($destinationPath, $Upload_image);
            $data['image'] = "$Upload_image";
            $post->image = $data['image'];
        }
        



        if(!empty($data['status'])){
            $post->status = "Published";
        } else {
            $post->status = "Draft";

        }
        $post->start_date = $data['start_date'];
        $post->valid_date = $data['valid_date'];


        $post->view_count = 0;
        $post->seo_title = $data['seo_title'];
        $post->seo_subtitle = $data['seo_subtitle'];
        $post->seo_keywords = $data['seo_keywords'];
        $post->seo_description = $data['seo_description'];

        $admin_id = Auth::user()->id;
        $post->admin_id = $admin_id;

        
        $tags = $data['tag_id'];
        $post->save();
        $post->tags()->attach($tags);
        Session::flash('success_message', 'Post Has Been Added Successfully');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post = Post::find($post->id);
        return view('admin.blogs.post.show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, $id)
   {
    $post = Post::findOrFail($id);

    $categories = Category::where(['parent_id' => 0])->get();
    $categories_dropdown = "<option selected disabled> Select Category </option>";
    foreach ($categories as $cat){

        if($cat->id == $post->category_id){
            $selected = "selected";
        } else {
            $selected = "";
        }

        $categories_dropdown .= "<option value=' ". $cat->id ."' ".$selected."> ". $cat->category_name ." </option>";
        $sub_categories = Category::where('parent_id', $cat->id)->get();
        foreach ($sub_categories as $sub_cat){
            if($sub_cat->id == $post->category_id){
                $selected = "selected";
            } else {
                $selected = "";
            }
            $categories_dropdown .= "<option value='". $sub_cat->id ."' ".$selected.">  &nbsp; &nbsp; ---- ". $sub_cat->category_name ."</option>";
        }
    }
    $tags = Tag::orderBy('name')->get();
    $post_tag = $post->tags()->pluck('tag_id')->toArray();

    return view('admin.blogs.post.edit', compact('post', 'categories_dropdown', 'tags', 'post_tag'));
}



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data = $request->all();
        $rules = [
            'post_title' => 'required|max:255',
        ];
        $customMessages = [
            'post_title.required' => 'Post Title is required',
            'post_title.max' => 'You are not allowed to enter more than 255 characters',
        ];
        $this->validate($request, $rules, $customMessages);
        $post = Post::find($id);
        $post->post_title = $data['post_title'];
        $post->slug = Str::slug($data['post_title']);
        $post->category_id = $data['category_id'];
        if(!empty($data['post_content'])){
            $post->post_content = $data['post_content'];
        } else {
            $post->post_content = "";
        }

        // if($image = $request->file('image')){
        //     $image_name = rand(111, 99999) . '.' . $image->getClientOriginalExtension();
        //     $path ='/posts' . $image_name;
        //     $image->move($path, $image_name);
        //     $post->image = $image_name;
        // }


        // storeAs

        // if ($request->has('image')) {
        //     //store file in disk
        //     $imagepath = $request->file('image')->storeAs('posts', rand(0, 999) . '' . $request->file('image')->getClientOriginalName());
        //     //saving file in database
        //     $post->image = $imagepath;

        // }

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/posts/';
            $Upload_image = date('YmdHis') . "_" . $image->getClientOriginalName();
            $image->move($destinationPath, $Upload_image);
            $data['image'] = "$Upload_image";
            $post->image = $data['image'];
        }
        



        if(!empty($data['status'])){
            $post->status = "Published";
        } else {
            $post->status = "Draft";

        }

        
        $post->view_count = 0;
        $post->seo_title = $data['seo_title'];
        $post->seo_subtitle = $data['seo_subtitle'];
        $post->seo_keywords = $data['seo_keywords'];
        $post->seo_description = $data['seo_description'];

        $admin_id = Auth::user()->id;
        $post->admin_id = $admin_id;

        
        $tags = $data['tag_id'];
        $post->save();
        $post->tags()->attach($tags);
        Session::flash('success_message', 'Post Has Been updated Successfully');
        return redirect()->back();

    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        $image_path = 'public/uploads/posts/';
        if(!empty($post->image)){
            if(file_exists($image_path.$post->image)){
                unlink($image_path.$post->image);
            }
        }
        Session::flash('success_message', 'Post Has Been Deleted Successfully');
        return redirect()->back();
    }
}
