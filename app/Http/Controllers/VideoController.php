<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVideoRequest;
use Illuminate\Support\Facades\Session;

use function GuzzleHttp\Promise\all;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::orderBy('id', 'desc')->get();
        return view('admin.video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $video = Video::all();
        return view('admin.video.add', compact('video'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVideoRequest $request)
    {
        $data = $request->validated();
        $video = Video::create($data);
        
        if ($thumbnail = $data->file('thumbnail')) {
            $destinationPath = 'uploads/video/thumbnail/';
            $Upload_thumbnail = date('YmdHis') . "_" . $thumbnail->getClientOriginalName();
            $thumbnail->move($destinationPath, $Upload_thumbnail);
            $data['thumbnail'] = "$Upload_thumbnail";
            $video->thumbnail = $data['thumbnail'];
        }
        
        
        $video->save();
        dd($data);
        Session :: flash('success_message', 'Video added successfully');
        return redirect()->route('video.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
