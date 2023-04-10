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
                        <a href="{{ route('productcategory.create') }}" class="btn add-btn" ><i class="fa fa-plus"></i> Add Category</a>

                        {{-- <a href="{{ route('exportCategoryExcel') }}" class="btn add-btn btn-primary" style="background-color: #1a2eb9; border: 1px solid #1a2eb9;color: #fff; margin-right: 7px;" ><i class="fa fa-excel"></i> Export Excel</a> --}}
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All Categories</li>
                    </ul>
                </div>
            </div>
        </div>
        @include('admin.layouts.includes._message')
        <!-- /Page Header -->
        <div class="box box-primary">
            <div class="box-body">
                <div class="table-responsive">
                    <table  class="table" id="categoryTbl">
                        <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Category Name</th>
                            <th>Under Category</th>
                            <th>Priority Order</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $key => $category)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->parent_id }}</td>
                                <td>{{ $category->order }}</td>
                                <td>
                                    @if($category->status == 'Published')
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Inactive</span>
                                    @endif
                                <td>
                                    <a href="{{ route('productcategory.edit', $category->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('productcategory.destroy', $category->id) }}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
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
