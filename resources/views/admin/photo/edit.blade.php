@extends('admin.layouts.master')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Photos</h3>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('photo.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> View Photos</a>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Photo</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        @include('admin.layouts.includes._message')
        <form action="{{ route('photo.update', $photo->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="post_title">photo Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ $photo->title}} " reruired>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="date">Date <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="date" name="date" value="{{ $photo->date}} " reruired>
                                    </div>
                                </div>
                               
                              
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="post_title">  Order <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="order" name="order" value="{{ $photo->order }} " reruired>
                                    </div>
                                </div>
                                
                              
                               

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="post_content">Description  <span class="text-danger">*</span></label>
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"required >
                                            {{ $photo->description }}
                                        </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" @if($photo->status == "Published") checked @endif name="status" >
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
                                        <button type="submit" class="btn btn-primary btn-block">Update Photo</button>
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

                                        @if(!empty($photo->thumbnail))
                                        <img src="{{ asset('uploads/thumbnail/'.$photo->thumbnail) }}" alt="" id="one" width="300" height="200">
                                        @else
                                            <img src="https://via.placeholder.com/300x200?text=Thumbnail+Image" alt="" id="one">
                                        @endif
                                        <div class="form-group" style="margin-top: 10px">
                                            <label for="thumbnail">Thumbnail <span class="text-danger">*</span> </label>
                                            <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*" onchange="readURL(this);">
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">                             
                                        <div class="form-group" style="margin-top: 10px">
                                            <label for="photo_image">Photo Image <span class="text-danger">*</span> </label>
                                            <input type="file" class="form-control" id="photo_image" name="image[]" multiple= "multiple">
                                            
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


