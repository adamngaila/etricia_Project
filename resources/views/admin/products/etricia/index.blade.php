@extends('layouts.admin')
@section('title')
Iristracker | gps tracker
@endsection
@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
              <div class="col-lg-12">

              </div>
              <div class="card-body ">
              <div class="card">
<div class="card-header"> Etricia product
<form action="{{route('add_etricia')}}" method = 'get'>
@csrf
<button class="btn btn-success  btn-rounded pull-right "  type="submit"> <i class="fas fa-plus"></i>Add new</button>
</form>

</div>
<div class="card-body">
<table class="table table-responsive-sm table-bordered table-striped table-sm">
<thead style = "font-size:11px;">
<tr>
<th>package code</th>
<th>Description</th>
<th>manufacturing date</th>
<th>capacity</th>
<th>no of cells</th>
<th>selling price</th>
</tr>
</thead>
<tbody>
@foreach($EtriciaProduct as $etricia)
<tr>
<td>{{$etricia->packagecode}}</td>
<td>{{$etricia->description}}</td>
<td>{{$etricia->production_date}}</td>
<td>{{$etricia->capacity}}</td>
<td>{{$etricia->cell_number}}</td>
<td><span class="badge badge-success">{{$etricia->selling_price}}</span></td>
</tr>
@endforeach
</tbody>
</table>
<nav>
<ul class="pagination">
<li class="page-item"><a class="page-link" href="#">Prev</a></li>
<li class="page-item active"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">4</a></li>
<li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>
</nav>
</div>
</div>
</div>
              
              </div>
            </div>
          </div>
        </div>
@endsection
@section('scripts')

@endsection