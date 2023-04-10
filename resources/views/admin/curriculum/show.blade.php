
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
                    <h3 class="page-title">Curriculum</h3>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('curriculum.add') }}" class="btn add-btn" ><i class="fa fa-plus"></i> Add Category</a>

                        <a href="{{ route('curriculum.index') }}" class="btn add-btn btn-primary" style="background-color: #1a2eb9; border: 1px solid #1a2eb9;color: #fff; margin-right: 7px;" ><i class="fa fa-excel"></i> Back</a>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">View Single Curriculum</li>
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
        <th>File </th>
        <td>
            @if ($courseCur->curriculum_file)
            <a href="{{ asset('uploads/curriculum/'.$courseCur->curriculum_file) }}" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-download"></i></a>
        @else
            <span class="badge badge-danger">No File</span>
        @endif

           
        </td>
    </tr>
    <tr>
        <th>Course Category</th>
        <td>
            @if(!empty($courseCur->course->course_title))
                {{ $courseCur->course->course_title }}
            @else
                <span class="badge badge-danger">No Category</span>
            @endif
        </td>
    </tr>
    <tr>
        <th>Course Code</th>
        <td>
            @if(!empty($courseCur->course->course_code))
                {{ $courseCur->course->course_code }}
            @else
                <span class="badge badge-danger">No Category</span>
            @endif
        </td>
    </tr>
    <tr>
        <th>Course Module</th>
        <td>
            @if(!empty($courseCur->curriculum_module))
                {{ $courseCur->curriculum_module }}
                
            @else
                <span class="badge badge-danger">No Category</span>
            @endif
        </td>



    <tr>
        <th>Created At</th>
        <td>
            {{($courseCur->created_at) }}
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

