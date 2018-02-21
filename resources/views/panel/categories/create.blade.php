@extends('panel.layouts.main')
@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('panel.index') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Category Create</li>
    </ol>
    <!-- Icon Cards-->

    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Add Category</div>
      <div class="card-body">
        <form method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputName">Name:</label>
            <input class="form-control" name="name" type="text" placeholder="Enter Name">
          </div>
          <button class="btn btn-primary" type="submit">Create</button>
        </form>


      </div>
    </div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
@endsection
