@extends('admin.layouts.master')
@section('content')
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Products</h3>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('product.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> View Products</a>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add New Product</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        @include('admin.layouts.includes._message')
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title">Product Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }} " reruired>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category_id">Under Category <span class="text-danger">*</span></label>
                                        <select name="category_id" id="category_id" class="form-control">
                                            <?php echo $categories_dropdown; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="price">Price </label>
                                        <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="new_price">New Price </label>
                                        <input type="text" class="form-control" id="new_price" name="new_price" value="{{ old('new_price') }}">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="short_description">Short Description <span class="text-danger">*</span></label>
                                        <textarea name="short_description" id="short_description" cols="30" rows="10" class="form-control"required >
                                            {{ old('short_description') }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description"> Description <span class="text-danger">*</span></label>
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"required >
                                            {{ old('description') }}
                                        </textarea>
                                    </div>
                                </div>


                                {{-- <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="tag_id">Select Tags <span class="text-danger">*</span></label>
                                        <select name="tag_id[]" id="tag_id" class="form-control tags" multiple required>
                                            @foreach($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}
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
                                       <button type="submit" class="btn btn-primary btn-block">Add Post</button>
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
                                        <label for="image">Thumbnail <span class="text-danger">*</span> </label>
                                        <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">                             
                                    <div class="form-group" style="margin-top: 10px">
                                        <label for="photo_image">Photo Image  <span class="text-danger">Multiple related photo can upload </span> </label>
                                        <input type="file" class="form-control" id="photo_image" name="image[]" multiple= "multiple">
                                        
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
        CKEDITOR.replace( 'short_description' );
        CKEDITOR.replace( 'description' );

    </script>
    <script>
        $(document).ready(function () {
            $('.tags').select2();
        });
    </script>
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

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js%22%3E "> </script>
    <script>
        $(document).ready(function() {
            $('.tags').select2();
        });
    </script>
    
@endsection


