@extends('layouts.admin')
@section('title')
Etricia | Add Pack
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
<div class="card-header"> Register new powerpack
</div>
<div class="card-body">
{{ Form::open(['url' => '/store_etricia', 'method' => 'get'])}}
                          

        <div class="row">
                <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> {{ Form::label('New'),['class' => 'form-control-label'] }} <small>Powerpack</small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  </div>
                  <div class="x_content">
                    <div class="container">
                        <div class="row">
                         <div class='col-sm-4'>
                          
                            {{ Form::label('Package code'),['class' => 'form-control-label'] }}
                            <div class="form-group">
                                <div class='input-text'>
                                  
                                <input type="text" class="form-control" id="packagecode" name="packagecode">
                           
                                </div>
                            </div>
                         </div>
                    

                         <div class='col-sm-4'>
                            {{ Form::label('Serial number'),['class' => 'form-control-label'] }}
                            <div class="form-group">
                                <div class='input-text'>
                                  <input type="text" class="form-control" id="serial_no" name="serial_no">
                            </div>
                            </div>
                         </div>
                         <div class='col-sm-4'>
                            {{ Form::label('capacity'),['class' => 'form-control-label'] }}
                            <div class="form-group">
                                <div class='input-text'>
                                <input type="text" class="form-control" id="capacity" name="capacity">
                            </div>
                            </div>
                         </div>

                    
                         <div class='col-sm-4'>
                            {{ Form::label('number of cells'),['class' => 'form-control-label'] }}
                            <div class="form-group">
                                <div class='input-text'>
                                  <input type="text" class="form-control" id="cell_no" name="cell_no">
                            </div>
                            </div>
                         </div>
                       
                         <div class='col-sm-4'>
                            {{ Form::label('Production cost') ,['class' => 'form-control-label']}}
                            <div class="form-group">
                                <div class='input-text'>
                                 <input type="text" class="form-control" id="production_cost" name="production_cost">
                            </div>
                            </div>
                         </div>

                         <div class='col-sm-4'>
                            {{ Form::label('Selling price '),['class' => 'form-control-label'] }}
                            <div class="form-group">
                                <div class='input-text'>
                                 <input type="text" class="form-control" id="selling_price" name="selling_price">

                            </div>
                            </div>
                         </div> 
                         <div class='col-sm-4'>
                            {{ Form::label(' Production date '),['class' => 'form-control-label'] }}
                            <div class="form-group">
                                <div class='input-text'>
                                 <input type="text" class="form-control" id="production_date" name="production_date">

                            </div>
                            </div>
                         </div> 
                         <div class='col-sm-8'>
                            {{ Form::label('Description '),['class' => 'form-control-label'] }}
                            <div class="form-group">
                                <div class='input-text'>
                                 <input type="textarea" class="form-control" id="description" name="description">

                            </div>
                            </div>
                         </div> 
                       
              
                  </div>
                  <div class="card-footer">
                <div class="row save-buttons">
                    {{ Form::submit('Save',['class'=>'btn btn-success  btn-rounded']) }}
                </div>
            </div>      
            </div>
            </div>

             
        {{Form::close() }}
</div>
</div>
              
              </div>
            </div>
          </div>
        </div>
@endsection
@section('scripts')

@endsection