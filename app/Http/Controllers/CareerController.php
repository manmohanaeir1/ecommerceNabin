<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCareerRequest;
use App\Models\Career;
    use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /// order by id desc
        $careers = Career::orderBy('id', 'desc')->get();
        return view('admin.career.index', compact('careers'));
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
    public function store(StoreCareerRequest $request)
    {
        
   // Retrieve the validated data data.
   $data = $request->validated();
      
   // create new contact with validated data
    $career =  Career::create($data);


        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/career/';
            $Upload_file = date('YmdHis') . "_" . $image->getClientOriginalName();
            $image->move($destinationPath, $Upload_file);
            $data['image'] = "$Upload_file";
            $career->image = $data['image'];
        }
        if ($cv = $request->file('cv')) {
            $destinationPath = 'uploads/career/';
            $Upload_file = date('YmdHis') . "_" . $cv->getClientOriginalName();
            $cv->move($destinationPath, $Upload_file);
            $data['cv'] = "$Upload_file";
            $career->cv = $data['cv'];
        }

        

        $career->save();
        Session::flash('success_message', 'Career application submitted successfully');

        return redirect()->route('pages.careerapply');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit(Career $career)
    {
       // show previous status in option in dropdown
       
       

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Career $career)
    {
        // update status
        $career->status = $request->status;
        $career->save();
        Session::flash('success_message', 'Career has been updated successfully');
        return redirect()->route('career.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        
        $career->delete();
        $image_path = 'public/uploads/career/';
        if (file_exists($image_path . $career->image)) {
            unlink($image_path . $career->image);
        }
        Session::flash('success_message', 'Career Request has been Deleted Successfully');
        return redirect()->route('career.index');
    

    }
}
