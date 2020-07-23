@extends('layouts.profile')


@section('title')
Blackscience | {{ Auth::user()->name }}
@endsection

@section('content')
<div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">{{ Auth::user()->name }}</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Company </label>
                        <input type="text" class="form-control" disabled="" placeholder="Company" value="BLACKSCIENCE Inc.">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Username </label>
                        <input type="text" class="form-control" disabled="" placeholder="Username" value={{ Auth::user()->name }}>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label >Email address</label>
                        <input type="email" class="form-control" disabled="" value={{ Auth::user()->email }}>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" disabled="" placeholder="Company" value={{ Auth::user()->name }}>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label> Package </label>
                        <input type="text" class="form-control"disabled="" placeholder="Last Name" value=" ">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" disabled="" placeholder="Home Address" value={{ Auth::user()->phone }}>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>City/Region</label>
                        <input type="text" class="form-control" disabled="" placeholder="City" value={{ Auth::user()->region }}>
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Location</label>
                        <input type="text" class="form-control" disabled=""  placeholder="location" value={{ Auth::user()->location }}>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>IP adress</label>
                        <input type="number" class="form-control" disabled="" value= {{ Auth::user()->serverip }}>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Me</label>
                        <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="images/front3.jpg" alt="...">
              </div>
              <div class="card-body">
                
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src= {{ Auth::user()->image }} alt={{ Auth::user()->name }}>
                    <h5 class="title">{{ Auth::user()->name }}</h5>
                  </a>
                  <p class="description">
                  {{ Auth::user()->name }}
                  </p>
                </div>
                
                <p class="description text-center">
                  " <br>
                  I am a user of etricia product <br>
                  "
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