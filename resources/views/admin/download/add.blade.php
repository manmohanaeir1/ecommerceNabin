@extends('admin.layouts.master')
@section('content')
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Download</h3>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('download.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> View All Files</a>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add New File</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        @include('admin.layouts.includes._message')
        <form action="{{ route('download.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="category_id">File Description<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="file_description" name="file_description" value="{{ old('file_description') }} " reruired>
                                    </div>
                                </div>


                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="post_title">File Link <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="file_link" name="file_link" value="{{ old('file_link') }} " reruired>
                                    </div>
                                </div>

                                {{-- <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="post_content">Upload File <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" id="upload_file" name="upload_file" value="{{ old('upload_file') }} " reruired>
                                    </div>
                                </div> --}}


                                
                            </div>



                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" checked name="status">
                                    <label class="form-check-label" for="invalidCheck2">
                                       Published 
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="https://via.placeholder.com/300x200?text=Thumbnail+Image" alt="" id="one">
                                    <div class="form-group" style="margin-top: 10px">
                                        <label for="image"> Image <span class="text-danger">*</span> </label>
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                </div>
                            </div>

                           <div class="row">
                               <div class="col-md-8">
                               </div>
                               <div class="col-md-4">
                                   <div class="text-right">
                                       <button type="submit" class="btn btn-primary btn-block">Save</button>
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
    
    
    
    <script>
        $(document).ready(function () {
            $('#image').change(function (e) {
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


