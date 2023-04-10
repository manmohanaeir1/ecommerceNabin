
@extends('admin.layouts.master')
@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Categories</h3>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('post.add') }}" class="btn add-btn" ><i class="fa fa-plus"></i> Add Category</a>

                        <a href="{{ route('post.index') }}" class="btn add-btn btn-primary" style="background-color: #1a2eb9; border: 1px solid #1a2eb9;color: #fff; margin-right: 7px;" ><i class="fa fa-excel"></i> Back</a>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">View Single Categories</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <div class="box box-primary">
            <div class="box-body">
                <div class="table-responsive">
                    
                        <table class="table table-hover">
    <tr>
        <th>Post Image</th>
        <td>
            @if(!empty($post->image))
                <img src="{{ asset('uploads/posts/'.$post->image) }}" alt="" width="300">
            @else
                <img src="{{ asset('default/noimage.jpg') }}" width="300">
            @endif
        </td>
    </tr>



     <tr>
         <th>Post Title</th>
         <td>{{ $post->post_title }}</td>
     </tr>

    <tr>
        <th>Post Slug</th>
        <td>{{ $post->slug }}</td>
    </tr>

    <tr>
        <th>Under Category</th>
        <td>
            {{ $post->category->category_name }}
        </td>
    </tr>

    <tr>
        <th>Status</th>
        <td>
            @if($post->status == "Published")
                <span class="badge badge-success">Active</span>
            @else
                <span class="badge badge-danger">In Active</span>
            @endif
        </td>
    </tr>



    <tr>
        <th>Created At</th>
        <td>
            {{($post->created_at) }}
        </td>
    </tr>
</table>
</div>

</div>
</div>
</div>
@endsection
@push('scripts')
<script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
$('#categoryTbl').DataTable();
} );
</script>
@endpush

