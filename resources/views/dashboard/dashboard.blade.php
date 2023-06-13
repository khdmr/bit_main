@extends('layouts.sidebar')

@section('container')
<div class="card">
    <div class="d-flex align-items-end row">
      <div class="col-sm-7">
        <div class="card-body">
          <h5 class="card-title text-primary">Welcome back, {{ $orang->name }}</h5>
        </div>
      </div>
    </div>
  </div>
@endsection