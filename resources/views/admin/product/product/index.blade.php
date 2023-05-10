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
                    <h3 class="page-title">Product</h3>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('product.create') }}" class="btn add-btn" ><i class="fa fa-plus"></i> Add Product</a>

                        {{-- <a href="{{ route('exportCategoryExcel') }}" class="btn add-btn btn-primary" style="background-color: #1a2eb9; border: 1px solid #1a2eb9;color: #fff; margin-right: 7px;" ><i class="fa fa-excel"></i> Export Excel</a> --}}
                    </div>


                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All Product</li>
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
                                <th>SN</th>
                                <th>Title</th>
                                <th>Thumbnail</th>
                                <th>Category_id</th>
                                <th>Price</th>
                                <th>New_price</th>
                                <th>Features</th>
                                <th>Description</th>
                                <th>Availability</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                                <tbody>
                                    @foreach ($products as $key => $product)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{!!Str::limit($product->title, 30) !!}</td>
                                        <td><img src="{{ asset('uploads/products/thumbnail/'.$product->thumbnail) }}" alt="" width="100px"></td>
                                        <td>{{ $product->category_id }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->new_price }}</td>
                                        <td>{!!Str::limit($product->description, 30) !!}</td>
                                        <td>{!!Str::limit($product->short_description, 30) !!}</td>
                                        
                                        <td>
                                            @if ($product->availability == 1)
                                                <span class="badge badge-success">In Stock</span>
                                            @else
                                                <span class="badge badge-danger">Out of Stock</span>
                                            @endif
                                        </td>
                                        <td>{{ $product->status }}</td>
                                        <td>
                                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>

                                            <form id="delete-form-{{ $product->id }}" action="{{ route('product.destroy', $product->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button class="btn btn-danger btn-sm" type="button" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $product->id }}').submit();
                                            }else {
                                                event.preventDefault();
                                                    }"><i class="fa fa-trash"></i></button>



                                        </td>

                                    </tr>

                                    @endforeach
                                </tbody>
                                    
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

