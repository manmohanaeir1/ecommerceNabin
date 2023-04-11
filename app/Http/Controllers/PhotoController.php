<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Session;
use App\Models\Photo;
use App\Models\Photo_list;
// File 
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();
        return view('admin.photo.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $photo = Photo::all();
        return view('admin.photo.add' , compact('photo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $input = $request->all();
       $rules = [
          'title' => 'required',
            'order' => 'required',
            'status' => 'required',
            'image' => 'required',
            'thumbnail' => 'required',
            'price' => 'required'
            

       ];

       $customMsg = [
           'title.required' => 'Title is required',
           'order.required' => 'Order is required',
           'status.required' => 'Status is required',
           'image.required' => 'Image is required',
                'thumbnail.required' => 'Thumbnail is required',
            'price.required' => 'Price is required'
       ];

       $this->validate($request, $rules, $customMsg);

        $photo = new Photo();
        $photo->title = $input['title'];
        $photo->description = $input['description'];
        $photo->order = $input['order'];
        $photo->price = $input['price'];

        if(!empty($input['status'])){
            $photo->status = "Published";
        } else {
            $photo->status = "Draft";

        }

        // for thumbnail image


        if ($thumbnail = $request->file('thumbnail')) {
            $destinationPath = 'uploads/thumbnail/';
            $Upload_thumbnail = date('YmdHis') . "_" . $thumbnail->getClientOriginalName();
            $thumbnail->move($destinationPath, $Upload_thumbnail);
            $data['thumbnail'] = "$Upload_thumbnail";
            $photo->thumbnail = $data['thumbnail'];
        }

        $photo->save();

// for attach multiple image in database

        if ($request->hasfile('image')) {
            $images = array();
            foreach ($request->file('image') as $image) {
                $destinationPath = 'uploads/photos/';
                $Upload_image = date('YmdHis') . "_" . $image
                ->getClientOriginalName();
                $image->move($destinationPath, $Upload_image);
                $images[] = $Upload_image;
                $photo_list = new Photo_list();
                $photo_list->photo_id = $photo->id;
                $photo_list->image = $Upload_image;
                $photo_list->save();
            }
            $photo->image = json_encode($images);
            $photo->save();
        }
            $photo->save();
        Session::flash('success_message', 'Photo added successfully');
        return redirect()->route('photo.index');


               


        



    
   
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)

    {

        $photo_list = Photo_list::where('photo_id', $photo->id)->get();
            $photo = Photo::find($photo->id);

        return view('admin.photo.edit', compact('photo' , 'photo_list'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Photo $photo , Photo_list $photo_list)
    {
        $input = $request->all();
        $rules = [
           'title' => 'required',
             'order' => 'required',
             'status' => 'required',
             
 
        ];
 
        $customMsg = [
            'title.required' => 'Title is required',
            'order.required' => 'Order is required',
            'status.required' => 'Status is required',
           
 
        ];
 
        $this->validate($request, $rules, $customMsg);

 
         $photo->title = $input['title'];
         $photo->description = $input['description'];
         $photo->date = $input['date'];
         $photo->order = $input['order'];
 
         if(!empty($input['status'])){
             $photo->status = "Published";
         } else {
             $photo->status = "Draft";
 
         }
 
         // for thumbnail image
 
 
         if ($thumbnail = $request->file('thumbnail')) {
             $destinationPath = 'uploads/thumbnail/';
             $Upload_thumbnail = date('YmdHis') . "_" . $thumbnail->getClientOriginalName();
             $thumbnail->move($destinationPath, $Upload_thumbnail);
             $data['thumbnail'] = "$Upload_thumbnail";
             $photo->thumbnail = $data['thumbnail'];
         }
 
         $photo->save();

         // for attach multiple image in database
         if ($request->hasfile('images')) {
            $images = array();
            foreach ($request->file('images') as $image) {
                $destinationPath = 'uploads/photos/';
                $Upload_image = date('YmdHis') . "_" . $image->getClientOriginalName();
                $image->move($destinationPath, $Upload_image);
                $images[] = $Upload_image;

                $photo_list->photo_id = $photo->id;
                $photo_list->image = $Upload_image;
                $photo_list->save();
            }
            $photo->image = json_encode($images);
            $photo->save();
        }
            $photo->save();

         Session::flash('success_message', 'Photo updated successfully');
         return redirect()->route('photo.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);
        $photo->delete();
        Session::flash('success_message', 'Photo deleted successfully');
        return redirect()->route('photo.index');

}
}
