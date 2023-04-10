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
                    <h3 class="page-title">Career</h3>

                   


                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All Career</li>
                    </ul>



                </div>
            </div>
        </div>
        <!-- /Page Header -->
        @include('admin.layouts.includes._message')


        <div class="box box-primary">
            <div class="box-body">
                <div class="table-responsive">
                    <table  class="table" id="careertbl">
                            <thead>
                                <tr>
                                    <th>S.N </th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Experiences</th>
                                    <th>Portfolio Link</th>
                                    <th>C.V</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                    
                                    @foreach ($careers as $key => $career)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td><img src="{{ asset('uploads/career/'.$career->image) }}" alt="" width="50px"></td>
                                        <td>{{ $career->name }}</td>
                                        <td>{{ $career->email }}</td>
                                        <td>{{ $career->phone }}</td>
                                        <td>{{ $career->address }}</td>
                                        <th>{{ $career->expertise }}</th>
                                        <td>{{ $career->link }}</td>
                                        

                                        <td><a href="{{ asset('uploads/career/'.$career->cv) }}" target="_blank">View </a></td>
                                       
                                        <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal{{$career->id}}">
                                        <i class="fa fa-eye"></i>

                                          </button></td>
                                        <td>
                                            @if ($career->status == 1)
                                                <span class="badge badge-success">Approved</span>
                                            @else
                                                <span class="badge badge-danger">Pending</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('career.edit', $career->id) }}" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModalLong{{$career->id}}"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('career.destroy', $career->id) }}" method="POST" style="display: inline-block;">
                                                @csrf   
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>


     <!-- msg popup Modal start-->                                      

                                    <div class="modal fade" id="myModal{{$career->id}}">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                      
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                              <h4 class="modal-title">Message </h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                      
                                            <!-- Modal body -->
                                            <div class="card">
                                                <div class="card-body">
                                                  <h5 class="card-title">From : {{ $career->name }}</h5>
                                                  {{ $career->message }}                                                 
                                                </div>
                                              </div>
                                      
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                      
                                          </div>
                                        </div>
                                      </div>

        <!-- End Modal of popup msg -->                                      


                                    <!-- Modal for update status -->
                                
                                   
                                    <div class="modal fade" id="exampleModalLong{{$career->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Update Status </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('career.update',$career->id) }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                        <select name="status" id="status" class="form-control" >
                                                            <option value="0">Pending</option>
                                                            <option value="1">Approve</option>
                                                        </select>
                                               
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                        </div>
                                            </div>
                                    </form>
                                        </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- Button trigger modal -->

  
                                
                               
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
$('#careertbl').DataTable();
} );
</script>
@endpush

