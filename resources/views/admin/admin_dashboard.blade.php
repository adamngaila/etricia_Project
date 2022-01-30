@extends('layouts.admin')
@section('title')
Etricia | Admin Dashboard
@endsection
@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                Google Maps
              </div>
              <div class="card-body ">
                @include('admin.charts')
              </div>
            </div>
          </div>
        </div>
@endsection
@section('scripts')

@endsection