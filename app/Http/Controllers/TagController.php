<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DataTables;
use Illuminate\Support\Str;


class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('admin.blogs.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.tag.add');
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
        ];
        $customMessages = [
            'name.required' => 'Tag name is required',
            'name.max' => 'You are not allowed to enter more than 255 characters',
        ];
        $this->validate($request, $rules, $customMessages);
        $tag = new Tag();
        $tag->name = $data['name'];
        $tag->slug = Str::slug($data['name']);
        $tag->save();
        Session::flash('success_message', 'Tag Has Been Added Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
            $tag = Tag::findOrFail($id);
            return view ('admin.blogs.tag.edit')->with(compact('tag'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data = $request->all();
        $rules = [
            'name' => 'required|max:255',
        ];
        $customMessages = [
            'name.required' => 'Tag name is required',
            'name.max' => 'You are not allowed to enter more than 255 characters',
        ];
        $this->validate($request, $rules, $customMessages);
        $tag = Tag::findOrFail($id);
        $tag->name = $data['name'];
        $tag->slug = Str::slug($data['name']);
        $tag->save();
        Session::flash('success_message', 'Tag Has Been Updated Successfully');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id)->delete();
        Session::flash('success_message', 'Tag Has Been Deleted Successfully');
        return redirect()->back();
    }
}
