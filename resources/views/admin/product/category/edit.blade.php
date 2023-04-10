@extends('admin.layouts.master')

@section('content')
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Product Categories</h3>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('productcategory.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> View Categories</a>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Category</li>
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
                        <form action="{{ route('productcategory.update', $productCategory->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="parent_id">Under Category <span class="text-danger">*</span></label>
                                        <select name="parent_id" id="parent_id" class="form-control">
                                            <option value="0">Main Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" @if($productCategory->parent_id == $category->id) selected @endif>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="name">Category Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $productCategory->name }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="order">Priority Order <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="order" name="order" value="{{ $productCategory->order }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  @if($productCategory->status == 1) checked @endif name="status">
                                    <label class="form-check-label" for="invalidCheck2">
                                       Active
                                    </label>
                                </div>
                            </div>

                           <div class="row">
                               <div class="col-md-8">

                               </div>
                               <div class="col-md-4">
                                   <div class="text-right">
                                       <button type="submit" class="btn btn-primary btn-block">Update Category</button>
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
