@extends('admin.layouts.master')
@section('content')
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Videos</h3>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('video.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> View Videos</a>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add New Video</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        @include('admin.layouts.includes._message')
        <form action="{{ route('video.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="post_title">Video Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }} " reruired>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="video_link">  Video Link <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="video_link" name="video_link" value="{{ old('video_link') }} " reruired>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="order">Order <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="order" name="order" value="{{ old('order') }} " reruired>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="post_content">Description  <span class="text-danger">*</span></label>
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"required ></textarea>
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
                                        <button type="submit" class="btn btn-primary btn-block">Add Video</button>
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
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="https://via.placeholder.com/300x200?text=Thumbnail+Image" alt="" id="one">
                                        <div class="form-group" style="margin-top: 10px">
                                            <label for="thumbnail">Thumbnail <span class="text-danger">*</span> </label>
                                            <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                                        </div>
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
        CKEDITOR.replace( 'description' );
    </script>
    
    <script>
        $(document).ready(function () {
            $('#thumbnail').change(function (e) {
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

        // script
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
 
    </script>



<script

    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous">
    </script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>




    

 
 
     </script>


    
@endsection


