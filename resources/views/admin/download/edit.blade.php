@extends('admin.layouts.master')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Download</h3>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('download.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> View All</a>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Files</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        @include('admin.layouts.includes._message')
        <form action="{{ route('download.update', $download->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="category_id">File Description<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="file_description" name="file_description" value="{{$download->file_description}} " reruired>
                                </div>
                            </div>


                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="file_link">File Link <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="file_link" name="file_link" value="{{$download->file_link}} " reruired>

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
                                <input class="form-check-input" type="checkbox" value="1" @if($download->status == "Published") checked @endif name="status" >
                                <label class="form-check-label" for="invalidCheck2">
                                   Published 
                                </label>
                            </div>
                        </div>
                       
                        <div class="col-md-12">
                            @if(!empty($download->image))
                            <img src="{{ asset('uploads/download/'.$download->image) }}" alt="" id="one" width="300" height="200">
                            @else
                                <img src="https://via.placeholder.com/300x200?text=Thumbnail+Image" alt="" id="one">
                            @endif
                            <div class="form-group" style="margin-top: 10px">
                                <label for="image"> Image <span class="text-danger">*</span> </label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="readURL(this);">
                            </div>
                        </div>

                       <div class="row">
                           <div class="col-md-8">
                           </div>
                           <div class="col-md-4">
                               <div class="text-right">
                                   <button type="submit" class="btn btn-primary btn-block">Update</button>
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


