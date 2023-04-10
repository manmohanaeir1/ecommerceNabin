<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;




class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $downloads = Download::all();
         return view('admin.download.index', compact('downloads'));
        

    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.download.add');
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
            'file_description' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ];
        $messages = [
            'file_description.required' => 'File_description is required',
            'image.mimes' => 'Image is not valid',
            'image.max' => 'Image is not valid',

        ];

        $this->validate($request, $rules, $messages);
        $download = new Download();
        $download->file_description = $data['file_description'];
        $download->file_link = $data['file_link'];

        if($image = $request->file('image')){
            $destinationPath = 'uploads/download/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $download->image = "$profileImage";
        }
        if(!empty($data['status'])){
            $download->status = "Published";
        } else {
            $download->status = "Draft";

        }
        $download->save();
        Session::flash('success_message', 'Download has been added successfully');
        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function show(Download $download)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function edit(Download $download, $id)
    {
        $download = Download::findOrFail($id);
        return view('admin.download.edit', compact('download'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\download  $download
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Download $download , $id)
    {
        $data = $request->all();
        $rules = [
            'file_description' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ];
        $messages = [
            'file_description.required' => 'File_description is required',
            'image.mimes' => 'Image is not valid',
            'image.max' => 'Image is not valid',

        ];

        $this->validate($request, $rules, $messages);
        $download = Download::findOrFail($id);;
        $download->file_description = $data['file_description'];
        $download->file_link = $data['file_link'];

        if($image = $request->file('image')){
            $destinationPath = 'uploads/download/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $download->image = "$profileImage";
        }
        if(!empty($data['status'])){
            $download->status = "Published";
        } else {
            $download->status = "Draft";

        }
        $download->save();
        Session::flash('success_message', 'Download has been updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\download  $download
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        {
            $download = Download::findOrFail($id);
            $download->delete();
            $image_path = 'public/uploads/download/';
            if(!empty($download->image)){
                if(file_exists($image_path.$download->image)){
                    unlink($image_path.$download->image);
                }
            }
            Session::flash('success_message', 'Download has been deleted successfully');
            return redirect()->back();
            
        }
    }
}
