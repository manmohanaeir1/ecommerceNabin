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
                    <h3 class="page-title">Course</h3>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{route('course.add')}}" class="btn add-btn" ><i class="fa fa-plus"></i> Add Course</a>

                        {{-- <a href="{{ route('exportCategoryExcel') }}" class="btn add-btn btn-primary" style="background-color: #1a2eb9; border: 1px solid #1a2eb9;color: #fff; margin-right: 7px;" ><i class="fa fa-excel"></i> Export Excel</a> --}}
                    </div>


                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All Course</li>
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
                                    <th>S.N</th>
                                    <th>Image</th>
                                    <th>Order</th>
                                    <th>Course Code</th>
                                    <th>Course Category</th>
                                    <th>File</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                  @foreach ($courses as $key => $course)
                                  <tr>
                                    <td>{{$key+1}}</td>
                                    <td>
                                        <img src="{{ asset('uploads/courses/'.$course->course_image) }}" alt="" width="100px">
                                    </td>
                                    <td>{{$course->sort}}</td>

                                    <td>{!!Str::limit($course->course_code ?? '') !!}</td>

                                        
                                    <td>{{$course->category->course_category_name}}</td>
                                    
                                    <td>
                                        @if ($course->curriculum_file)
                                            <a href="{{ asset('uploads/curriculum/'.$course->curriculum_file) }}" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-download"></i></a>
                                        @else
                                            <span class="badge badge-danger">No File</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if ($course->status == 'Published')
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif   

                                    <td>
                                        <a href="{{ route('curriculum.add', $course->id) }}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
                                        <a href="{{ route('course.edit', $course->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>

                                        <form  method="POST"  action="{{ route('course.delete', $course->id) }}">
                                            @csrf
                                            @method('DELETE')
                                           <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this course!')"><i class="fa fa-trash"></i></button>
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

