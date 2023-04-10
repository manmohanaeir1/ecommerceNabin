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
                    <h3 class="page-title">Contacts</h3>

                   


                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">View All Contacts</li>
                    </ul>



                </div>
            </div>
        </div>
        <!-- /Page Header -->
        @include('admin.layouts.includes._message')


        <div class="box box-primary">
            <div class="box-body">
                <div class="table-responsive">
                    <table  class="table" id="contacttbl">
                            <thead>
                                <tr>
                                    <th>S.N </th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                    
                                    @foreach ($contacts as $key => $contact)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->subject }}</td>
                                        <td>                                           
                                             <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal{{$contact->id}}">Message</button>
                                        </td>
                                        <td>
                                             
                                            <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <!-- msg popup Modal start-->                                      
           
                                               <div class="modal fade" id="myModal{{$contact->id}}">
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
                                                             <h5 class="card-title">From : {{ $contact->name }}</h5>
                                                             {{ $contact->message }}                                                 
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
$('#contacttbl').DataTable();
} );
</script>
@endpush

