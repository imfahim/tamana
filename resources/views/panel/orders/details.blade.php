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
        <a href="{{ route('orders.index') }}">Order List</a>
      </li>
      <li class="breadcrumb-item active">Order Details</li>
    </ol>
    <!-- Icon Cards-->
    <div>
      @if($status->status === 0)
        <form method="POST" action="{{route('order.delivery')}}">
          {{ csrf_field() }}
          <input type="hidden" name="order_id" value="{{ $status->id }}" />
          <button type="submit" class="btn btn-sm btn-success">Make Delivery
        </form>
      @elseif($status->status === 1)
      <form method="POST" action="{{route('order.cancel')}}">
        {{ csrf_field() }}
        <input type="hidden" name="order_id" value="{{ $status->id }}" />
        <button type="submit" class="btn btn-sm btn-danger">Cancel
      </form>
      @endif
    </div>

    <br>


    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Product List</div>
      <div class="card-body">
        @if($details)
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Option</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Option</th>
              </tr>
            </tfoot>
            <tbody>
              @foreach($details as $detail)
                <tr>
                  <td>{{ $detail->name }}</td>
                  <td>  <center><img src="{{asset('images/products/'.$detail->product_id.'_0.jpg')}}" alt="Flowers" height="50px"></center></td>
                  <td>{{ $detail->order_quantity }}</td>
                  <td>{{ $detail->total }}</td>
                  <td>
                    @if($status->status === 0)
                      <span class="text-warning">Pending</span>
                    @elseif($status->status === 1)
                      <span class="text-success">Delivered</span>
                    @else
                      <span class="text-danger">Canceled</span>
                    @endif
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
