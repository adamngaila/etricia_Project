@extends('layouts.profile')


@section('title')
Blackscience | {{ Auth::user()->name }}
@endsection

@section('content')
<div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">{{date("d/m/Y")}}</h5>

              </div>
              <div class="card-body">
                <form>
                  <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    
                      <div class="text-xs font-weight-bold text-uppercase mb-1"> TOTAL CONSUMTION</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">KWh</div>
                      <div class="mt-2 mb-0  text-xs">
                        <div class="h5 mb-0 font-weight-bold text-gray-800"> 
                       </div>
                     
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class=" bn ti-headphone-alt  "></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    
                      <div class="text-xs font-weight-bold text-uppercase mb-1"> POWER</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">KW</div>
                      <div class="mt-2 mb-0  text-xs">
                        <div class="h5 mb-0 font-weight-bold text-gray-800"> 
                       </div>
                     
                      {{$Parameters->power}}
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class=" bn ti-headphone-alt  "></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">PACK STATUS </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                     {{$controlStatus->relay_1}}
                    </div>
                    <div class="col-auto">
                      <i class="bn ti-bag "></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
                   <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">CHARGE STATUS </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                      
                  {{$controlStatus->relay_2}}
                    </div>
                    <div class="col-auto">
                      <i class="bn ti-bag "></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    
                      <div class="text-xs font-weight-bold text-uppercase mb-1"> LOCK STATUS</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> </div>
                      <div class="mt-2 mb-0  text-xs">
                        <div class="h5 mb-0 font-weight-bold text-gray-800"> 
                       </div>
                     
                      {{$controlStatus->Lock}}
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class=" bn ti-headphone-alt  "> </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            
             </div>
                </form>
             
              </div>
            </div>
             <div class="card">
             <div class="card-header">
                <h5 class="title">LOCATION</h5>
              </div>
              <div class="card-body">
                <div id="map">
      
    </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=https://etricia.herokuapp.com/api/qrcode_user?code={{Auth::user()->serverip}}" alt="..." size="150">
              </div>
              <div class="card-body">
                
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src= {{ Auth::user()->image }} alt={{ Auth::user()->name }}>
                    <h5 class="title">{{ Auth::user()->name }}</h5>
                  </a>
                  <p class="description">
                   <label>Phone</label>
                    <input type="text" class="form-control" disabled="" placeholder="Company" value={{ Auth::user()->phone }}>
                  </p>
                </div>
                
                <p class="description text-center">
            
                   <label>Email</label>
                    <input type="text" class="form-control" disabled="" placeholder="Company" value={{ Auth::user()->email }}>
              
                </p>

                <p class="description text-center">
            
                   <label>Pack Code</label>
                    <input type="text" class="form-control" disabled="" placeholder="Company" value={{ Auth::user()->serverip }}>
              
                </p>
                <p class="description text-center">
                     <label>City/Region</label>
                  <input type="text" class="form-control" disabled="" placeholder="City" value={{ Auth::user()->region }}>
                </p>
                 <p class="description text-center">
                 <label>Location</label>
                        <input type="text" class="form-control" disabled=""  placeholder="location" value={{ Auth::user()->location }}>
                      </p>
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
     @endsection