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
                    <h3 class="page-title">Download</h3>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('download.add') }}" class="btn add-btn" ><i class="fa fa-plus"></i> Add File</a>

                    </div>


                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">{{ route('download.add') }}</a></li>
                        <li class="breadcrumb-item active">V{{ route('download.add') }}</li>
                    </ul>



                </div>
            </div>
        </div>
        <!-- /Page Header -->
        @include('admin.layouts.includes._message')


        <div class="box box-primary">
            <div class="box-body">
                <div class="table-responsive">
                    <table  class="table" id="doTbl">
                        <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Image</th>
                                    <th>file_description</th>
                                    <th>file link</th>
                                    <th>status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($downloads as $download)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/download/'.$download->image) }}" alt="" width="100px">
                                        </td>
                                        <td>{{ $download->file_description }}</td>
                                        <td>{{ $download->file_link }}</td>
                                        <td>
                                            @if ($download->status == 'Published')
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('download.edit', $download->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                            <form  method="POST"  action="{{ route('download.delete', $download->id) }}">
                                                @csrf
                                                @method('DELETE')
                                               <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this course!')"><i class="fa fa-trash"></i></button>
                                            </form>                                        </td>
                                        
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
$('#doTbl').DataTable();
} );
</script>
@endpush

