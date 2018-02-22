@extends('panel.layouts.main')

@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('panel.index') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item">Product List</li>
      <li class="breadcrumb-item active">Add Product</li>
    </ol>

    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-cube"></i> Add a Product</div>
      <div class="card-body">
          <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" name="name" type="text" placeholder="Enter Name" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="category">Select Category:</label>
                <select class="form-control" name="category_id" required="">
                  @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" type="text" placeholder="Enter Desctiption (HTML Allowed)" rows="10"></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input class="form-control" name="quantity" type="text" placeholder="Enter Quantity">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="price">Price:</label>
                <input class="form-control" name="price" type="text" placeholder="Enter Price">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="tags">Tags:</label>
                <input class="form-control" name="tags" type="text" placeholder="Enter tag words (seprate with commas ',')">
              </div>
            </div>
          </div>
          <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
          <div class="com-md-12">
            <label for="tags">images:</label>

            <input required type="file" class="form-control" name="images[]" placeholder="address" multiple>
          <div class="pull-right">
            <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-check"></i> Add</button>
          </div>
          </form>
      </div>
      <div class="card-footer small text-muted"></div>
    </div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
@endsection
