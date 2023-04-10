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
                    <h3 class="page-title">Videos</h3>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{route('video.create')}}" class="btn add-btn" ><i class="fa fa-plus"></i> Add Videos</a>

                        {{-- <a href="{{ route('exportCategoryExcel') }}" class="btn add-btn btn-primary" style="background-color: #1a2eb9; border: 1px solid #1a2eb9;color: #fff; margin-right: 7px;" ><i class="fa fa-excel"></i> Export Excel</a> --}}
                    </div>


                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All Videos</li>
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
                                    <th>S.N </th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Thumbnail</th>
                                    <th>View</th>
                                    <th>Order</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($videos as $key => $video)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $video->title }}</td>
                                    <td>{{ $video->description }}</td>
                                    <td><img src="{{ asset('uploads/video/'.$video->thumbnail) }}" alt="" width="50px"></td>
                                    <td>{{ $video->view }}</td>
                                    <td>{{ $video->order }}</td>
                                    <td>
                                        @if ($video->status == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('video.edit', $video->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('video.delete', $video->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
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

