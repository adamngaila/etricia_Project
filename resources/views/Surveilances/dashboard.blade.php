@extends('layouts.master')

@section('title')
Dashboard | Iris tracker
@endsection

@section('content')

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">IRIS SURVEILANCE</h4>
              </div>
              <div class="card-body">
              
                @foreach($surveilanceIP as $surveilanceIP)
                  @if(($surveilanceIP->cam1_adress)==" " )
                  <br>
                  <iframe frameborder="0" height="300" width="230" marginwidth="0%" scrolling="no" src={{ $surveilanceIP->cam2_adress}}></iframe>
                  <br>
                    <iframe frameborder="0" height="300" width="230" marginwidth="0%" scrolling="no" src={{ $surveilanceIP->cam3_adress}}></iframe>
                  @endif
                  @if(($surveilanceIP->cam2_adress) ==" " )
                    <iframe frameborder="0" height="300" width="230" marginwidth="0%" scrolling="no" src={{ $surveilanceIP->cam1_adress}}></iframe>
                  @endif
                  @if(($surveilanceIP->cam3_adress)==" " )
                    <iframe frameborder="0" height="400" width="400" marginwidth="0%" scrolling="no"padding:5px src={{ $surveilanceIP->cam2_adress}}></iframe>
                  @endif
                  <iframe frameborder="0" height="400" width="400" marginwidth="0%" scrolling="no" src={{ $surveilanceIP->cam1_adress}}></iframe>
                  
                  <iframe frameborder="0" height="400" width="400" marginwidth="0%" scrolling="no" src={{ $surveilanceIP->cam2_adress}}></iframe>
                  <br>
                  <iframe frameborder="0" height="400" width="400" marginwidth="0%" scrolling="no" src={{ $surveilanceIP->cam3_adress}}></iframe>
                  
                    <iframe frameborder="0" height="400" width="400" marginwidth="0%" scrolling="no" src={{ $surveilanceIP->cam4_adress}}></iframe>
                @endforeach  
                
                
                <!--br>

                 <iframe frameborder="0" height="700" width="100%" marginwidth="0%" scrolling="yes" src="http://192.168.8.102/picture/1/frame/"></iframe>
              <br-->
           
                 <!--iframe frameborder="0" height="300" width="230" marginwidth="0%" scrolling="no" src={{ Auth::user()->server }}":8082"></iframe-->
              
              </div>
            </div>
          </div>
        </div>

@endsection

