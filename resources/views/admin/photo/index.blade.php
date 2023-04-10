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
                    <h3 class="page-title">Photos</h3>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{route('photo.create')}}" class="btn add-btn" ><i class="fa fa-plus"></i> Add Photos</a>

                        {{-- <a href="{{ route('exportCategoryExcel') }}" class="btn add-btn btn-primary" style="background-color: #1a2eb9; border: 1px solid #1a2eb9;color: #fff; margin-right: 7px;" ><i class="fa fa-excel"></i> Export Excel</a> --}}
                    </div>


                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All Photos</li>
                    </ul>



                </div>
            </div>
        </div>
        <!-- /Page Header -->
        @include('admin.layouts.includes._message')


        <div class="box box-primary">
            <div class="box-body">
                <div class="table-responsive">
                    <table  class="table" id="coursetbl">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Photo Name</th>
                                    <th>Photo Description</th>
                                    <th>Thumbnail </th>
                                    <th>Priority Order</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($photos as $key => $photo)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $photo->title }}</td>
                                    <td>{!! Str::limit($photo->description, 50) !!}</td>

                                    <td>
                                        
                                        <img src="{{ asset('uploads/thumbnail/'.$photo->thumbnail) }}" alt="" height="90" width="90" class="img img-responsive img-thumbnail">
                                    </td>
                                    <td>{{ $photo->order }}</td>
                                    <td>
                                        @if ($photo->status == 'Published')
                                        <span class="badge bg-success">Published</span>
                                        @else
                                        <span class="badge bg-danger">Draft</span>
                                        @endif
                                    </td>
                                    <td>
                                         
                                        <a href="{{ route('photo.edit', $photo->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('photo.destroy', $photo->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                                        </form>
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
$('#coursetbl').DataTable();
} );
</script>
@endpush

