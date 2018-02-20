@extends('panel.layouts.main')
@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('panel.index') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Category List</li>
    </ol>
    <!-- Icon Cards-->
    <div class="row">
      <div class="col-md-12">
        <div class="pull-right">
          <a href="{{route('panel.category.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Category</a>
        </div>
      </div>
    </div>
    <br>

    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Category List</div>
      <div class="card-body">
        @if($categories)
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Options</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Options</th>
              </tr>
            </tfoot>
            <tbody>
              @foreach($categories as $category)
                <tr>
                  <td>{{ $category->id }}</td>
                  <td>{{ $category->name }}</td>
                  <td>@if($category->status==1) Enable
                    @else Disable
                  @endif </td>
                  <td>{{ $category->created_at }}</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-close"></i> Delete</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        @else
          <center>No categories Yet !</center>
        @endif

      </div>
      <div class="card-footer small text-muted">Updated from Database</div>
    </div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->

@endsection
