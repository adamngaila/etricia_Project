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
              @if( (Auth::user()->id) == ($surveilanceIP->user_id) )
                @if(($surveilanceIP->cam_nambers) == 1 )
                  @if(($surveilanceIP->cam2_adress)==" " )
                    <iframe frameborder="0" height="300" width="230" marginwidth="0%" scrolling="no" src={{ $surveilanceIP->cam3_adress}}></iframe>
                  @endif
                  @if(($surveilanceIP->cam3_adress) ==" " )
                    <iframe frameborder="0" height="300" width="230" marginwidth="0%" scrolling="no" src={{ $surveilanceIP->cam1_adress}}></iframe>
                  @endif
                  @if(($surveilanceIP->cam1_adress)==" " )
                    <iframe frameborder="0" height="300" width="230" marginwidth="0%" scrolling="no" src={{ $surveilanceIP->cam2_adress}}></iframe>
                  @endif
                    <iframe frameborder="0" height="300" width="230" marginwidth="0%" scrolling="no" src={{ $surveilanceIP->cam2_adress}}></iframe>
                @endif   
              @endif
                
                <!--br>

                 <iframe frameborder="0" height="700" width="100%" marginwidth="0%" scrolling="yes" src="http://192.168.8.102/picture/1/frame/"></iframe>
              <br-->
           
                 <!--iframe frameborder="0" height="300" width="230" marginwidth="0%" scrolling="no" src={{ Auth::user()->server }}":8082"></iframe-->
              
              </div>
            </div>
          </div>
        </div>

@endsection

