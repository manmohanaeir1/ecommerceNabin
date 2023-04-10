@extends('admin.layouts.master')
@section('content')
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Courses</h3>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('course.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> View Courses</a>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add New Post</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        @include('admin.layouts.includes._message')
        <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="post_title">Course Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="id__save-title" name="course_title" value="{{ old('course_title') }} " reruired>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="post_title">Course Slug <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="id__save-slug" name="slug" value="{{ old('slug') }} " reruired>
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="post_title">Course Code <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="course_code" name="course_code" value="{{ old('course_title') }} " reruired>
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
                                        <input type="text" class="form-control" id="sort" name="sort" value="{{ old('sort') }} " reruired>
                                    </div>
                                </div>
                                
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="post_title">Course Duration <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="course_duration" name="course_duration" value="{{ old('course_duration') }} " reruired>
                                    </div>
                                </div>
                               

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="post_content">Course Content <span class="text-danger">*</span></label>
                                        <textarea name="course_content" id="course_content" cols="30" rows="10" class="form-control"required ></textarea>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" checked name="status">
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
                                        <button type="submit" class="btn btn-primary btn-block">Add Course</button>
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
                                    <img src="https://via.placeholder.com/300x200?text=Thumbnail+Image" alt="" id="one">
                                    <div class="form-group" style="margin-top: 10px">
                                        <label for="course_image">Course Image <span class="text-danger">*</span> </label>
                                        <input type="file" class="form-control" id="course_image" name="course_image">
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
                                        <input type="text" class="form-control" id="seo_title" name="seo_title" value="{{ old('seo_title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="seo_subtitle">SEO Sub Title </label>
                                        <input type="text" class="form-control" id="seo_subtitle" name="seo_subtitle" value="{{ old('seo_subtitle') }}">
                                    </div>
                                </div>
    
    
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="seo_keywords">SEO Keywords </label>
                                        <input type="text" class="form-control" id="seo_keywords" name="seo_keywords" value="{{ old('seo_keywords') }}">
                                    </div>
                                </div>
    
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="seo_description">SEO Description </label>
                                        <input type="text" class="form-control" id="seo_description" name="seo_description" value="{{ old('seo_description') }}">
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

    {{-- for auto fill Slug --}}
    <script>
     function slugify(s) {
   return s
     .toLowerCase()
     .replace(/[^-\w\s]/g, "") // remove non-alphanumerics
     .trim()
     .replace(/[-\s]+/g, "-") // spaces to hyphens
     .replace(/-+$/g, ""); // trim trailing hyphens
 }
 
 function slugAutoFill() {
     var titleInput = document.querySelector('#id__save-title');
     var slugInput = document.querySelector('#id__save-slug');
     if (!titleInput) {
         return;
     }
     let slugManuallyEdited = false;
     slugInput.addEventListener('change', () => {
         slugManuallyEdited = !!slugInput.value;
     });
     function titleEdited() {
         if (slugManuallyEdited) {
             return;
         }
         slugInput.value = slugify(titleInput.value);
     }
     titleInput.addEventListener('change', titleEdited);
     titleInput.addEventListener('focus', titleEdited);
     titleInput.addEventListener('keyup', titleEdited);
 }
 slugAutoFill();
 
     </script>
    
@endsection


