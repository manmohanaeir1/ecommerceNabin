<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\CourseCategory;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::where('status','Published')->orderBy('sort','desc')->get();

        return view('admin.courses.index',compact('courses'));
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = new Course();
        $course_cat = CourseCategory::all();
        $cat_dropdown = "<option selected disabled> Select Category </option>";
        foreach ($course_cat as $cat){
            $cat_dropdown .= "<option value=' ". $cat->id ." '> ". $cat->course_category_name ." </option>";
        }
        return view('admin.courses.add', compact('course', 'cat_dropdown'));
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
            'course_title' => 'required',
            'course_content' => 'required',
            'course_category_id' => 'required',
            'course_image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'curriculum_file' => 'mimes:pdf,doc,docx,zip,rar|max:2048',
            'seo_title' => ' max:200',
            'seo_subtitle' => 'max:200',
            'seo_description' => 'max:200',


            
        ];

        $error_msg = [
            'course_title.required' => 'Course Title is required',
            'course_content.required' => 'Course Content is required',
            'course_category_id.required' => 'Course Category is required',
            'course_image.image' => 'Course Image is required',
            'course_image.mimes' => 'Course Image must be jpg, png, jpeg, gif, svg',
            'course_image.max' => 'Course Image must be less than 2MB',
            'curriculum_file.mimes' => 'Curriculum File must be pdf, doc, docx, zip, rar',
            'curriculum_file.max' => 'Curriculum File must be less than 2MB',
            'seo_title.max' => 'SEO Title must be less than 200 characters',
            'seo_subtitle.max' => 'SEO Subtitle must be less than 200 characters',
            'seo_description.max' => 'SEO Description must be less than 200 characters',


        ];

        $this->validate($request, $rules, $error_msg);
        $course = new Course();
        $course->course_title = $data['course_title'];
        $course->course_code = $data['course_code'];
        $course->slug =Str::slug($data['slug']);
        $course->course_duration = $data['course_duration'];
        $course->course_category_id = $data['course_category_id'];
        $course->sort = $data['sort'];

            if(!empty($data['course_content'])){
                $course->course_content = $data['course_content'];
            }else{
                $course->course_content = "";
            }
            // for image upload
            
        if ($course_image = $request->file('course_image')) {
            $destinationPath = 'uploads/courses/';
            $Upload_image = date('YmdHis') . "_" . $course_image->getClientOriginalName();
            $course_image->move($destinationPath, $Upload_image);
            $data['course_image'] = "$Upload_image";
            $course->course_image = $data['course_image'];
        }
        // for curriculum file upload
        if ($curriculum_file = $request->file('curriculum_file')) {
            $destinationPath = 'uploads/courses/';
            $Upload_file = date('YmdHis') . "_" . $curriculum_file->getClientOriginalName();
            $curriculum_file->move($destinationPath, $Upload_file);
            $data['curriculum_file'] = "$Upload_file";
            $course->curriculum_file = $data['curriculum_file'];
        }

        if(!empty($data['status'])){
            $course->status = 'published';
        }else{
            $course->status = "Draft";
        }
        $course->seo_title = $data['seo_title'];
        $course->seo_subtitle = $data['seo_subtitle'];
        $course->seo_keywords = $data['seo_keywords'];
        $course->seo_description = $data['seo_description'];

        $admin_id = Auth::user()->id;
        $course->admin_id = $admin_id;

        $course->save();
        Session::flash('success_message', 'Course has been added successfully');
        return redirect()->back();


    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $course = Course::all();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course, $id)
    {
        $course = Course::findOrFail($id);
        $course_cat = CourseCategory::all();
        $cat_dropdown = "<option selected disabled> Select Category </option>";
        foreach ($course_cat as $cat){
            if($cat->id == $course->course_category_id){
                $selected = "selected";
            }else{
                $selected = "";
            }
            $cat_dropdown .= "<option value=' ". $cat->id ." ' ".$selected."> ". $cat->course_category_name ." </option>";
        }

        return view('admin.courses.edit', compact('course', 'cat_dropdown'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course , $id)
    {
        $data = $request->all();
        $rules = [
            'course_title' => 'required',
            'course_content' => 'required',
            'course_category_id' => 'required',
            'course_image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048:',
            'curriculum_file' => 'mimes:pdf,doc,docx,zip,rar|max:2048',
            'seo_title' => ' max:200',
            'seo_subtitle' => 'max:200',
            'seo_description' => 'max:200',

            
        ];

        $error_msg = [
            'course_title.required' => 'Course Title is required',
            'course_content.required' => 'Course Content is required',
            'course_category_id.required' => 'Course Category is required',
            'course_image.image' => 'Course Image is required',
            'course_image.mimes' => 'Course Image must be jpg, png, jpeg, gif, svg',
            'course_image.max' => 'Course Image must be less than 2MB',
            'curriculum_file.mimes' => 'Curriculum File must be pdf, doc, docx, zip, rar',
            'curriculum_file.max' => 'Curriculum File must be less than 2MB',
            'seo_title.max' => 'SEO Title must be less than 200 characters',
            'seo_subtitle.max' => 'SEO Subtitle must be less than 200 characters',
            'seo_description.max' => 'SEO Description must be less than 200 characters',


        ];

        $this->validate($request, $rules, $error_msg);
        $course = Course::find($id);
        $course->course_title = $data['course_title'];
        $course->course_code = $data['course_code'];
        $course->slug =Str::slug($data['slug']);
        $course->course_duration = $data['course_duration'];
        $course->sort = $data['sort'];
        $course->course_category_id = $data['course_category_id'];
            if(!empty($data['course_content'])){
                $course->course_content = $data['course_content'];
            }else{
                $course->course_content = "";
            }
            // for image upload
            
        if ($course_image = $request->file('course_image')) {
            $destinationPath = 'uploads/courses/';
            $Upload_image = date('YmdHis') . "_" . $course_image->getClientOriginalName();
            $course_image->move($destinationPath, $Upload_image);
            $data['course_image'] = "$Upload_image";
            $course->course_image = $data['course_image'];
            
        }
        // for curriculum file upload
        if ($curriculum_file = $request->file('curriculum_file')) {
            $destinationPath = 'uploads/courses/';
            $Upload_file = date('YmdHis') . "_" . $curriculum_file->getClientOriginalName();
            $curriculum_file->move($destinationPath, $Upload_file);
            $data['curriculum_file'] = "$Upload_file";
            $course->curriculum_file = $data['curriculum_file'];
        }
        

        if(!empty($data['status'])){
            $course->status = 'published';
        }else{
            $course->status = "Draft";
        }
        $course->seo_title = $data['seo_title'];
        $course->seo_subtitle = $data['seo_subtitle'];
        $course->seo_keywords = $data['seo_keywords'];
        $course->seo_description = $data['seo_description'];

        $admin_id = Auth::user()->id;
        $course->admin_id = $admin_id;

        $course->save();
        Session::flash('success_message', 'Course has been added successfully');
        return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        $image_path = 'public/uploads/courses/';
        if(!empty($course->course_image)){
            if(file_exists($image_path.$course->course_image)){
                unlink($image_path.$course->course_image);
            }
        }
        Session::flash('success_message', 'Course Has Been Deleted Successfully');
        return redirect()->back();
    }
}
