@extends('admin.layouts.master')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Course</h3>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('course.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> View Course</a>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Course</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        @include('admin.layouts.includes._message')
        <form action="{{ route('course.update', $course->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                            <div class="row">
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="post_title">Course Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="id__save-title" name="course_title" value="{{ $course->course_title }} " reruired>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="post_title">Course Slug <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="id__save-slug" name="slug" value="{{ $course->slug}} " reruired>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="post_title">Course Code <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="course_code" name="course_code" value="{{ $course->course_code }} " reruired>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="category_id">Under Category <span class="text-danger">*</span></label>
                                        <select name="course_category_id" id="course_category_id" class="form-control">
                                            <?php echo $cat_dropdown; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="post_title"> Course Order <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="sort" name="sort" value="{{ $course->sort }} " reruired>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="post_title">Course Duration <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="course_duration" name="course_duration" value="{{ $course->course_duration}} " reruired>
                                    </div>
                                </div>
                                

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="course_content">Content <span class="text-danger">*</span></label>
                                        <textarea name="course_content" id="course_content" cols="30" rows="10" class="form-control" required>
                                            {{ $course->course_content }}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" @if($course->status == "Published") checked @endif name="status" >
                                    <label class="form-check-label" for="invalidCheck2">
                                       Published Post
                                    </label>
                                </div>
                            </div>

                           <div class="row">
                               <div class="col-md-8">

                               </div>
                               <div class="col-md-4">
                                   <div class="text-right">
                                       <button type="submit" class="btn btn-primary btn-block">Update Curriculum</button>
                                   </div>
                               </div>
                           </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    @if(!empty($course->course_image))
                                    <img src="{{ asset('uploads/courses/'.$course->course_image) }}" alt="" id="one" width="300" height="200">
                                    @else
                                        <img src="https://via.placeholder.com/300x200?text=Thumbnail+Image" alt="" id="one">
                                    @endif
                                    <div class="form-group" style="margin-top: 10px">
                                        <label for="course_image">Course Image <span class="text-danger">*</span> </label>
                                        <input type="file" class="form-control" id="course_image" name="course_image" accept="image/*" onchange="readURL(this);">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="seo_title">File </label>
                                        <input type="file" class="form-control" id="file" name="curriculum_file" value="{{ old('file') }}">
                                    </div>
                                </div>
                            </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="seo_title">SEO Title </label>
                                    <input type="text" class="form-control" id="seo_title" name="seo_title" value="{{ $course->seo_title }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="seo_subtitle">SEO Sub Title </label>
                                    <input type="text" class="form-control" id="seo_subtitle" name="seo_subtitle" value="{{ $course->seo_subtitle }}">
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="seo_keywords">SEO Keywords </label>
                                    <input type="text" class="form-control" id="seo_keywords" name="seo_keywords" value="{{ $course->seo_keywords }}">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="seo_description">SEO Description </label>
                                    <input type="text" class="form-control" id="seo_description" name="seo_description" value="{{ $course->seo_description }}">
                                </div>
                            </div>

                        </div>





                </div>
            </div>
        </div>
        </form>
    </div>
    
    @endsection
    @section('addjs')
    
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'course_content' );
    </script>
    
    <script>
        $(document).ready(function () {
            $('#course_image').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#one')
                        .attr('src', e.target.result)
                        .width(300)
                        .height(200);
                };
                reader.readAsDataURL(e.target.files[0]);
            });
        });
    </script>
    
@endsection


