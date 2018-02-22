@extends('panel.layouts.main')

@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('panel.index') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item">
        <a href="{{ route('products.index') }}">Product List</a>
      </li>
      <li class="breadcrumb-item active">Edit Product</li>
    </ol>

    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-cube"></i> Edit Product</div>
      <div class="card-body">
          <form method="POST" action="{{ route('products.update', [$product->id]) }}">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put" />
            <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" name="name" type="text" placeholder="Enter Name" value="{{ $product->name }}" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="category">Select Category:</label>
                <select class="form-control" name="category_id" required="">
                  @foreach($categories as $category)
                      <option value="{{ $category->id }}" {{ ($category->id === $product->category->id) ? ' selected="selected"' : '' }}>{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" type="text" placeholder="Enter Desctiption (HTML Allowed)" rows="10">{{ $product->description }}</textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input class="form-control" name="quantity" type="text" placeholder="Enter Quantity" value="{{ $product->quantity }}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="price">Price:</label>
                <input class="form-control" name="price" type="text" placeholder="Enter Price" value="{{ $product->price }}">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="tags">Tags:</label>
                <input class="form-control" name="tags" type="text" placeholder="Enter tag words (seprate with commas ',')" value="{{ $product->tags }}">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="options">Options:</label>
                <input class="form-control" name="options" type="text" placeholder="Enter Options (seperated with commans ',')" value="{{ ($product->options) ? $product->options : '' }}">
              </div>
            </div>
          </div>
          <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
          <div class="pull-right">
            <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-check"></i> Save</button>
          </div>
          </form>
      </div>
      <div class="card-footer small text-muted"></div>
    </div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
@endsection
