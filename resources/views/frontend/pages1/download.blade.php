@extends('frontend.layouts.master')
@section('title')
Download
@endsection
@section('Datatblcss')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
@endsection
@section('content')
<!-- Content -->
<div class="page-content bg-gray">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/background/itzone-learning.jpeg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Download</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{route('frontend.home')}}">Home</a></li>
                        <li>Download</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- Career -->
    <!-- contact area -->
    <div class="content-block">
        <!-- Career -->
        <div class="section-full content-inner bg-gray">
            <div class="container">
                <!-- Left part start -->
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="table-responsive">
                            <table  class="table" id="doTbl">
                                <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Image</th>
                                            <th>File Description</th>
                                            <th>Download</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($downloads as $download)
                                   
                                 <tr class="gradeX">
                                        <td>{{$loop->index + 1}}</td>
                                        <td><img src="{{asset('uploads/download/'.$download->image)}}" alt="" style="width: 40px; height: 40px;"></td>
                                        <td>{{$download->file_description}}</td>
                                        <td><a href="{{$download->file_link}}">Click<i class="fa fa-download"></i></a></td>
                                  </tr>
                               @endforeach
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Left part start END -->
            </div>
        </div>
        <!-- Career END -->
    </div>
</div>
<!-- Content END-->
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


