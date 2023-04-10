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
                    <h3 class="page-title">Posts</h3>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('post.add') }}" class="btn add-btn" ><i class="fa fa-plus"></i> Add Post</a>

                        {{-- <a href="{{ route('exportCategoryExcel') }}" class="btn add-btn btn-primary" style="background-color: #1a2eb9; border: 1px solid #1a2eb9;color: #fff; margin-right: 7px;" ><i class="fa fa-excel"></i> Export Excel</a> --}}
                    </div>


                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All Posts</li>
                    </ul>



                </div>
            </div>
        </div>
        <!-- /Page Header -->
        @include('admin.layouts.includes._message')


        <div class="box box-primary">
            <div class="box-body">
                <div class="table-responsive">
                    <table  class="table" id="postTbl">
                        <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Image</th>
                                    <th>Post Title</th>
                                    <th>Category</th>
                                    <th>View Count</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $key => $post)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/post/'.$post->image) }}" alt="" width="100px">
                                            </td>
                                            <td>{!!Str::limit($post->post_title, 50) !!}</td>
                                            <td>{{ $post->category->category_name ?? '' }}</td>
                                            <td>{{ $post->view_count }}</td>
                                            <td>
                                                <a href="{{ route('post.show', $post->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                                <a href="{{ route('post.delete', $post->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                            </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('scripts')
<script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
$('#postTbl').DataTable();
} );
</script>
@endpush

