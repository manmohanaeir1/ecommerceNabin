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
                        <a href="{{route('curriculum.add')}}" class="btn add-btn" ><i class="fa fa-plus"></i> Add Curriculum</a>

                        {{-- <a href="{{ route('exportCategoryExcel') }}" class="btn add-btn btn-primary" style="background-color: #1a2eb9; border: 1px solid #1a2eb9;color: #fff; margin-right: 7px;" ><i class="fa fa-excel"></i> Export Excel</a> --}}
                    </div>


                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All Curriculum</li>
                    </ul>



                </div>
            </div>
        </div>
        <!-- /Page Header -->
        @include('admin.layouts.includes._message')


        <div class="box box-primary">
            <div class="box-body">
                <div class="table-responsive">
                    <table  class="table" id="courseTbl">
                        <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Course Code</th>
                                    <th>Curriculum Module</th>
                                    <th>Status</th>
                                    <th>Order</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courseCurriculum as $key => $curriculum)

                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{!!Str::limit($curriculum->course->course_code ?? '')  !!}</td>
                                        <td>{!!Str::limit($curriculum->curriculum_module) !!}</td>
                                        <td>
                                            @if ($curriculum->status == 'Published')
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>{{$curriculum->curriculum_order}}</td>


    
                                        <td>
                                            <a href="{{ route('curriculum.show', $curriculum->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('curriculum.edit', $curriculum->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
    
                                            <form  method="POST"  action="{{ route('curriculum.delete', $curriculum->id) }}">
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
@endsection
@push('scripts')
<script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
$('#courseTbl').DataTable();
} );
</script>
@endpush

