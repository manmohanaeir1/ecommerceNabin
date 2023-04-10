@extends('admin.layouts.master')

@section('content')
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Tags</h3>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('tag.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> View Tags</a>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Tag</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        @include('admin.layouts.includes._message')

        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('tag.update', $tag->id) }}" method="post">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Tag Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $tag->name }}"required>
                                    </div>
                                </div>
                            </div>


                           <div class="row">

                               <div class="col-md-4">
                                   <div class="text-right">
                                       <button type="submit" class="btn btn-primary btn-block">Update Tag</button>
                                   </div>
                               </div>
                           </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>




    </div>
    @endsection
