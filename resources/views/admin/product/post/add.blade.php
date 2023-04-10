@extends('admin.layouts.master')
@section('content')
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Posts</h3>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('post.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> View Posts</a>
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
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="category_id">Under Category <span class="text-danger">*</span></label>
                                        <select name="category_id" id="category_id" class="form-control">
                                            <?php echo $categories_dropdown; ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="post_title">Post Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="post_title" name="post_title" value="{{ old('post_title') }} " reruired>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="post_content">Content <span class="text-danger">*</span></label>
                                        <textarea name="post_content" id="post_content" cols="30" rows="10" class="form-control"required ></textarea>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="tag_id">Select Tags <span class="text-danger">*</span></label>
                                        <select name="tag_id[]" id="tag_id" class="form-control tags" multiple required>
                                            @foreach($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
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
                                        <label for="image">Post Image <span class="text-danger">*</span> </label>
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                </div>
                            </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="seo_title">Start_date </label>
                                    <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date') }}">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="seo_title">End_date </label>
                                    <input type="date" class="form-control" id="valid_date" name="valid_date" value="{{ old('valid_date') }}">
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
        CKEDITOR.replace( 'post_content' );
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


