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
          <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Product</a>
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
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" data-form="deleteForm">
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
                    <div class="row">
                      <div class="col-md-3">
                        <a href="{{ route('products.edit', [$product->id]) }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                      </div>
                      <div class="col-md-2">
                        <form class="form-delete" method="POST" action="{{ route('products.destroy', [$product->id]) }}">
    											{{ csrf_field() }}
    											<input type="hidden" name="_method" value="delete" />
    											<input type="hidden" name="id" value="{{ $product->id }}" />
                          <button type="submit" class="btn btn-danger btn-sm">
                              <i class="fa fa-close"></i> Delete
                          </button>
    										</form>
                      </div>
                    </div>




                    <!--<a href="#" class="btn btn-sm btn-danger"><i class="fa fa-close"></i> Delete</a>-->
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

  <!-- Confirmation Modal Box -->
  @include('panel.layouts.modal')
@endsection

@section('page-scripts')
  <script>
  // For Deletion Confirmation Modal
  $('table[data-form="deleteForm"]').on('click', '.form-delete', function(e){
      e.preventDefault();
      var $form=$(this);
      $('#confirm').modal({ backdrop: 'static', keyboard: false })
          .on('click', '#delete-btn', function(){
              $form.submit();
          });
  });
  </script>
@endsection
