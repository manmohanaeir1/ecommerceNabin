<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCurriculum;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class CourseCurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courseCurriculum = courseCurriculum::where('status','Published')->orderBy('id','desc')->get();

        return view('admin.curriculum.index', compact('courseCurriculum'));
    }

    public function curriculum_add_course($id)
    {   
        $curriculum = CourseCurriculum::find($id);
        $course = Course::all();
        $course_dropdown = "<option selected disabled> Select Course </option>";
        foreach ($course as $course){
            if($curriculum->course_id == $course->id){
                $selected = "selected";
            }else{
                $selected = "";
            }
            $course_dropdown .= "<option value=' ". $course->id ." ' ". $selected ."> ". $course->course_title ." </option>";
        }

        return view('admin.curriculum.add_curriculum', compact('course_dropdown'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = new CourseCurriculum();  
        $courseCurriculum =Course::all();          
        $course_dropdown = "<option selected disabled> Select Course </option>";
        foreach ($courseCurriculum as $course){
            $course_dropdown .= "<option value=' ". $course->id ." '> ". $course->course_title ." </option>";
        }
        return view('admin.curriculum.add', compact('course_dropdown'));

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
                'course_id' => 'required',
                'curriculum_module' => 'required',
                'curriculum_content' => 'required',
                'curriculum_file' => 'mimes:pdf,doc,docx,zip,rar|max:2048',
                'curriculum_order' => 'required',
                'seo_title' => ' max:200',
                'seo_subtitle' => 'max:200',
                'seo_keywords' => 'max:200',
                'seo_description' => 'max:500',

            ];
            $error_msg = [
                'course_id.required' => 'Course is required',
                'curriculum_module.required' => 'Module is required',
                'curriculum_content.required' => 'Content is required',
                'curriculum_file.mimes' => 'File type must be pdf, doc, docx, zip, rar',
                'curriculum_file.max' => 'File size must be less than 2MB',
                'curriculum_order.required' => 'Order is required',
                'seo_title.max' => 'SEO Title must be less than 200 characters',
                'seo_subtitle.max' => 'SEO Subtitle must be less than 200 characters',
                'seo_keywords.max' => 'SEO Keywords must be less than 200 characters',
                'seo_description.max' => 'SEO Description must be less than 500 characters',


            ];

            $this->validate($request, $rules, $error_msg);
            $curriculum = new CourseCurriculum();
            $curriculum->course_id = $data['course_id'];
            $curriculum->curriculum_module = $data['curriculum_module'];
            $curriculum->curriculum_slug =Str::slug($data['curriculum_module']);
            $curriculum->curriculum_order = $data['curriculum_order'];

            if(!empty($data['curriculum_content'])){
                $curriculum->curriculum_content = $data['curriculum_content'];
            }else{
                $curriculum->curriculum_content = "";
            }

            if(!empty($data['status'])){
                $curriculum->status = 'published';
            }else{
                $curriculum->status = "Draft";
            }
            
            //file upload
            if($request->hasFile('curriculum_file')){
                $curriculum_file = $request->file('curriculum_file');
                $extension = $curriculum_file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $curriculum_file->move('uploads/curriculum/', $filename);
                $curriculum->curriculum_file = $filename;
            }else{
                $curriculum->curriculum_file = "";
            }

            $curriculum->seo_title = $data['seo_title'];
            $curriculum->seo_subtitle = $data['seo_subtitle'];
            $curriculum->seo_keywords = $data['seo_keywords'];
            $curriculum->seo_description = $data['seo_description'];

            $admin_id = Auth::user()->id;
            $curriculum->admin_id = $admin_id;

            $curriculum->save();
            Session::flash('success_message', 'Curriculum has been added successfully!');
            return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseCurriculum  $courseCurriculum
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courseCur = CourseCurriculum::find($id);
        return view('admin.curriculum.show', compact('courseCur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseCurriculum  $courseCurriculum
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseCurriculum $courseCurriculum, $id)
    {
        $curriculum = CourseCurriculum::find($id);
        $course = Course::all();
        $course_dropdown = "<option selected disabled> Select Course </option>";
        foreach ($course as $course){
            if($curriculum->course_id == $course->id){
                $selected = "selected";
            }else{
                $selected = "";
            }
            $course_dropdown .= "<option value=' ". $course->id ." ' ". $selected ."> ". $course->course_title ." </option>";
        }
        return view('admin.curriculum.edit', compact('curriculum', 'course_dropdown'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseCurriculum  $courseCurriculum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseCurriculum $courseCurriculum, $id)
    {
        $data = $request->all();
        $rules = [
            'course_id' => 'required',
            'curriculum_module' => 'required',
            'curriculum_content' => 'required',
        ];  

        $error_msg = [
            'course_id.required' => 'Course is required',
            'curriculum_module.required' => 'Module is required',
            'curriculum_content.required' => 'Content is required',
        ];

        $this-> validate($request, $rules, $error_msg); 
        $curriculum = CourseCurriculum::find($id);
        $curriculum->course_id = $data['course_id'];
        $curriculum->curriculum_module = $data['curriculum_module'];
        $curriculum->curriculum_slug =Str::slug($data['curriculum_module']);
        $curriculum->curriculum_order = $data['curriculum_order'];
        if(!empty($data['curriculum_content'])){
            $curriculum->curriculum_content = $data['curriculum_content'];
        }else{
            $curriculum->curriculum_content = "";
        }

        if(!empty($data['status'])){
            $curriculum->status = 'published';
        }else{
            $curriculum->status = "Draft";
        }
        
        //file upload
        if($request->hasFile('curriculum_file')){
            $curriculum_file = $request->file('curriculum_file');
            $extension = $curriculum_file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $curriculum_file->move('uploads/curriculum/', $filename);
            $curriculum->curriculum_file = $filename;
        }else{
            $curriculum->curriculum_file = "";
        }

        $curriculum->seo_title = $data['seo_title'];
        $curriculum->seo_subtitle = $data['seo_subtitle'];
        $curriculum->seo_keywords = $data['seo_keywords'];
        $curriculum->seo_description = $data['seo_description'];

        $admin_id = Auth::user()->id;
        $curriculum->admin_id = $admin_id;
        $curriculum->save();
        Session::flash('success_message', 'Curriculum has been updated successfully!');
         
        return redirect()->back();




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseCurriculum  $courseCurriculum
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        $curriculum = CourseCurriculum::findOrFail($id);
        $curriculum->delete();
        $image_path = 'public/uploads/courses/';
        if(!empty($curriculum->curriculum_file)){
            if(file_exists($image_path.$curriculum->curriculum_file)){
                unlink($image_path.$curriculum->curriculum_file);
            }
        }
        Session::flash('success_message', 'Curriculum Has Been Deleted Successfully');
        return redirect()->back();
    }
    
}
