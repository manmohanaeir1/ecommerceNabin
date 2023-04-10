@extends('admin.layouts.master')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Curriculum</h3>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('curriculum.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> View Curriculum</a>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Curriculum</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        @include('admin.layouts.includes._message')
        <form action="{{ route('curriculum.update', $curriculum->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="course_category_id">Under Category <span class="text-danger">*</span></label>
                                        <select name="course_id" id="course_id" class="form-control">
                                            <?php echo $course_dropdown; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="post_title">Curriculum Module <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="curriculum_module" name="curriculum_module" value="{{$curriculum->curriculum_module}} " reruired>
                                    </div>
                                </div>

                            </div>
                             <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="post_content">Curriculum Content <span class="text-danger">*</span></label>
                                        <textarea name="curriculum_content" id="curriculum_content" cols="30" rows="10" class="form-control"required >
                                            {{ $curriculum->curriculum_content }}
                                        </textarea>
                                    </div>
                                </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" @if($curriculum->status == "Published") checked @endif name="status" >
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
                                    <div class="form-group">
                                        <label for="seo_title">Curriculum Order <span class="text-danger">*</span></label></label>
                                        <input type="number " class="form-control" id="curriculum_order" name="curriculum_order" value="{{$curriculum->curriculum_order}}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="seo_title">File </label>
                                        <input type="file" class="form-control" id="file" name="curriculum_file" value="{{ $curriculum->curriculum_file}}">
                                    </div>
                                </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="seo_title">SEO Title </label>
                                    <input type="text" class="form-control" id="seo_title" name="seo_title" value="{{ $curriculum->seo_title }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="seo_subtitle">SEO Sub Title </label>
                                    <input type="text" class="form-control" id="seo_subtitle" name="seo_subtitle" value="{{ $curriculum->seo_subtitle }}">
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="seo_keywords">SEO Keywords </label>
                                    <input type="text" class="form-control" id="seo_keywords" name="seo_keywords" value="{{ $curriculum->seo_keywords }}">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="seo_description">SEO Description </label>
                                    <input type="text" class="form-control" id="seo_description" name="seo_description" value="{{ $curriculum->seo_description }}">
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
        CKEDITOR.replace( 'curriculum_content' );
    </script>
    
    <script>
        $(document).ready(function () {
            $('#curriculum_file').change(function (e) {
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


