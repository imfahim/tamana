@extends('panel.layouts.main')

@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('panel.index') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Product List</li>
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
        <i class="fa fa-table"></i> Product List</div>
      <div class="card-body">
        @if($products)
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price (₹)</th>
                <th>Status</th>
                <th>Options</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price (₹)</th>
                <th>Status</th>
                <th>Options</th>
              </tr>
            </tfoot>
            <tbody>
              @foreach($products as $product)
                <tr>
                  <td>{{ $product->name }}</td>
                  <td>{{ $product->quantity }}</td>
                  <td>₹ {{ $product->price }}</td>
                  <td>{{ $product->status }}</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                    <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-close"></i> Delete</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        @else
          <center>No Products Yet !</center>
        @endif

      </div>
      <div class="card-footer small text-muted">Updated from Database</div>
    </div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
@endsection
