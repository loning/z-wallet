@extends('layouts.app')

@section('custom-styles')
<link href="/css/dashboard.css" rel="stylesheet">
@endsection

@section('custom-nav')
<li><a href="{{ url('dashboard/addresses') }}">Addresses</a></li>
@endsection

@section('custom-scripts')
<script src="/js/newaddress.js"></script>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <h3>Generate new address</h3>
    <div class="col-md-4">
    <div class="form-group">
      <label for="label">Label:</label>
      <input type="text" class="form-control" id="label">
       {{ csrf_field() }}
    </div>
    <button type="button" id="generate-address" class="btn btn-success">Generate</button>
    <div id="address-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New address</h4>
      </div>
      <div class="modal-body">
        <p class="modal-address-text">test</p>
        <img id="modal-address-qr" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  </div>
  </div>
</div>
<div class="container latest-transactions">
<div class="row">
  <h3>Addresses</h3>
<div class="table-responsive">
<table class="table" id="addresses-table">
  <thead class="latest-transactions-header">
    <tr>
      <th>Date generated</th>
      <th>Address</th>
      <th>Label</th>
    </tr>
  </thead>
  <tbody>
    @foreach($addresses as $address)
      <tr>
        <td>{{ $address->updated_at }}</td>
        <td>{{ $address->address }}</td>
        <td>{{ $address->label }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
@endsection
