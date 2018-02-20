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
    <!-- Icon Cards-->
    <div class="row">
      <div class="col-md-12">
        <div class="pull-right">
          <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Product</a>
        </div>
      </div>
    </div>
    <br>

    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-cube"></i> Add a Product</div>
      <div class="card-body">

      </div>
      <div class="card-footer small text-muted"></div>
    </div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
@endsection
