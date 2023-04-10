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
                        <a href="{{ route('category.add') }}" class="btn add-btn" ><i class="fa fa-plus"></i> Add Category</a>

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
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $key => $cat)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $cat->category_name }}</td>
                                    <td>
                                        @if($cat->parent_id == 0)
                                        Main Category
                                    @else
                                         {{ $cat->subCategory->category_name }}
                                    @endif 
                                    </td>
                                    <td>
                                        <a href="{{ route('category.show', $cat->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('category.edit', $cat->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('category.delete', $cat->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
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
