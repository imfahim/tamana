@extends('panel.layouts.main')
@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('panel.index') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Order List</li>
    </ol>
    <!-- Icon Cards-->

    <br>

    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Order List</div>
      <div class="card-body">
        @if($orders)
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Ammount</th>
                <th>Option</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Ammount</th>
                <th>Option</th>
              </tr>
            </tfoot>
            <tbody>
              @foreach($orders as $order)
                <tr>
                  <td>{{ $order->code }}</td>
                  <td>{{ $order->fullname }}</td>
                  <td>{{ $order->email }}</td>
                  <td>{{ $order->phone }}</td>
                  <td>{{ $order->address }}</td>
                  <td>{{ $order->total }}</td>
                  <td>
                    @if($order->status === 0)
                      <span class="text-warning">Pending</span>
                    @elseif($order->status === 1)
                      <span class="text-success">Completed</span>
                    @else
                      <span class="text-danger">Canceled</span>

                    @endif
                    <a href="{{route('orders.show',[$order->order_id])}}" class="btn btn-sm btn-primary">Details</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        @else
          <center>No orders Yet !</center>
        @endif

      </div>
      <div class="card-footer small text-muted">Updated from Database</div>
    </div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
@endsection
