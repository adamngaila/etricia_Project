@extends('layouts.powerpack')
@section('title')
Etricia | Monitoring
@endsection
@section('content')
<div class="row">
   <div class="col-md-12">
      <div class="card ">
         <div class="card-header" style="padding: 0px">
            <div class="tab">
               <button class="tablinks" onclick="openCity(event, 'MonitorControl')" id="defaultOpen">Monitor/Control</button>
               <button class="tablinks" onclick="openCity(event, 'Charts')">Charts</button>
               <button class="tablinks" onclick="openCity(event, 'Diagnosis')">Diagnosis</button>
            </div>
         </div>
         <div class="card-body ">
            <div id="MonitorControl" class="tabcontent">
               <link href="../assets/css/treestyle.css" rel="stylesheet" />
               <div class="body genealogy-body genealogy-scroll">
                  <div class="genealogy-tree">
                     <ul>
                        <li>
                           <a href="javascript:void(0);">
                              <div class="member-view-box">
                                 <div class="member-image">
                                    <img src="../images/tree/toplevel.jpg" alt="Member">
                                    <div class="member-details">
                                       <h5>{{ Auth::user()->name }}</h5>
                                       <h5>{{ Auth::user()->serverip }}</h5>
                                       <p>{{date("d/m/Y")}}</p>
                                    </div>
                                 </div>
                              </div>
                           </a>
                           <ul>
                              <li>
                                 <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                       <div class="member-image">
                                          <img src="../images/tree/monitor.jpg" alt="Member">
                                          <div class="member-details">
                                             <h4>Monitor</h4>
                                             <p> {{$datetime}} </p>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                                 <ul >
                                    <li>
                                       <a href="javascript:void(0);">
                                          <div class="member-view-box">
                                             <div class="member-image">
                                                <div class="member-details">
                                                   <h5>Temperature</h5>
                                                </div>
                                             </div>
                                             <div class="table-responsive ">
                                                <table class="table table-responsive-sm table-bordered table-striped table-sm">
                                                   <thead class="thead-dark">
                                                      <th>param</th>
                                                      <th class="text-center"> unit</th>
                                                      <th class="text-center">value</th>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td>temperature</td>
                                                         <td class="text-center">celcius</td>
                                                         <td class="text-center">{{$Parameters->Temperature}} </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0);">
                                          <div class="member-view-box">
                                             <div class="member-image">
                                                <div class="member-details">
                                                   <h5>Voltage</h5>
                                                </div>
                                             </div>
                                             <div class="table-responsive table-upgrade">
                                                <table class ="table table-responsive-sm table-bordered table-striped table-sm">
                                                   <thead class="thead-dark">
                                                      <th>param</th>
                                                      <th class="text-center"> unit</th>
                                                      <th class="text-center">value</th>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td>voltage</td>
                                                         <td class="text-center">V</td>
                                                         <td class="text-center">{{$Parameters->volts}}</td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0);">
                                          <div class="member-view-box">
                                             <div class="member-image">
                                                <div class="member-details">
                                                   <h5>Other parameters</h5>
                                                </div>
                                             </div>
                                          </div>
                                       </a>
                                       <ul>
                                          <li>
                                             <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                   <div class="member-image">
                                                      <div class="member-details">
                                                         <h5>Current</h5>
                                                      </div>
                                                   </div>
                                                   <div class="table-responsive table-upgrade">
                                                      <table class ="table  table-bordered table-striped table-sm">
                                                         <thead class="thead-dark">
                                                            <th>param</th>
                                                            <th class="text-center"> unit</th>
                                                            <th class="text-center">value</th>
                                                         </thead>
                                                         <tbody>
                                                            <tr>
                                                               <td>Amps</td>
                                                               <td class="text-center">A</td>
                                                               <td class="text-center">{{$Parameters->current}}</td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                   <div class="member-image">
                                                      <div class="member-details">
                                                         <h5>Battery</h5>
                                                         <div class="container">
                                                            <div class="skills html">{{$batery}}%</div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                   <div class="member-image">
                                                      <div class="member-details">
                                                         <h5>Power</h5>
                                                      </div>
                                                   </div>
                                                   <div class="table-responsive table-upgrade">
                                                      <table class ="table table-responsive-sm table-bordered table-striped table-sm">
                                                         <thead class="thead-dark">
                                                            <th>param</th>
                                                            <th class="text-center"> unit</th>
                                                            <th class="text-center">value</th>
                                                         </thead>
                                                         <tbody>
                                                            <tr>
                                                               <td>Power</td>
                                                               <td class="text-center">W</td>
                                                               <td class="text-center">{{$Parameters->power}}</td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                       </ul>
                                    </li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                       <div class="member-image">
                                          <img src="../images/tree/control.jpg" alt="Member">
                                          <div class="member-details">
                                             <h4>Control</h4>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                                 <ul>
                                    <li>
                                       <a href="javascript:void(0);">
                                          <div class="member-view-box">
                                             <div class="member-image">
                                                <div class="member-details">
                                                   <h5>Switch</h5>
                                                </div>
                                             </div>
                                             <table class="table">
                                                <tbody>
                                                   <tr>
                                                      <td class="text-center"></td>
                                                      <td class="text-center">
                                                         <BUTTON  id="switchON"  class="btn btn-round btn-success">ON</BUTTON>
                                                      </td>
                                                      <td class="text-center">
                                                         <BUTTON id="swichOFF" class="btn btn-round btn-primary">OFF</BUTTON>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0);">
                                          <div class="member-view-box">
                                             <div class="member-image">
                                                <img src="../images/tree/charge.png" alt="Member">
                                                <div class="member-details">
                                                   <h5>Charge</h5>
                                                </div>
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0);">
                                          <div class="member-view-box">
                                             <div class="member-image">
                                                <img src="../images/tree/lock.jpg" alt="Member">
                                                <div class="member-details">
                                                   <h5>lock</h5>
                                                </div>
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div id="Charts" class="tabcontent">
               <h5 class="title">Charts</h5>
                     <div class="row">
                  <div class="col-md-6">
            <div class="card card-chart" background="dark";>
              <div class="card-header bg-blue">
                <h2 class="card-category">VOLTAGE READINGS</h2>
                
              </div>
           
              <canvas id="S1chart" width="411" height="190" class="chartjs-render-monitor" style="display: block; width: 411px; height: 190px;"></canvas>
                
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-chart" background="dark";>
              <div class="card-header bg-blue">
                <h2 class="card-category">POWER READINGS</h2>
                
              </div>
           
              <canvas id="Currentchart" width="411" height="190" class="chartjs-render-monitor" style="display: block; width: 411px; height: 190px;"></canvas>
                
              
            </div>
          </div>
                </div>
                <div class="row">
      
          <div class="col-md-12">
            <div class="card card-chart" background="dark";>
              <div class="card-header bg-blue">
                <h2 class="card-category">CONSUMPTION TREND</h2>
                
              </div>
           
                <canvas id="Temperaturechart"></canvas>
                
              
            </div>
          </div>
          </div>
            </div>
            <div id="Diagnosis" class="tabcontent">
               <h5 class="title">Diagnosis</h5>
               <table class="table table-striped table-bordered" style="font-size: 11px;">
                  <thead>
                     <tr>
                        <th> DATE</th>
                        <th> Temperature Sensor </th>
                        <th> Current Sensor</th>
                        <th> Voltage Sensor </th>
                         <th> Memory </th>
                     </tr>
                  </thead>
                  <tbody>
                       @foreach($diagnosis as $result)
                     <tr>
                        <td>{{$result->created_at}}</td>
                       <td>{{$result->TempSensor}}</td>
                       <td>{{$result->CurrentSensor}}</td>
                      <td>{{$result->VoltageSensor}}</td>
                      <td>{{$result->MemoryShield}}</td>
                     </tr>
                       @endforeach
                  </tbody>
               </table>
                {{$diagnosis-> links()}}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('scripts')

<script>
   $(function () {
       $('.genealogy-tree ul').hide();
       $('.genealogy-tree>ul').show();
       $('.genealogy-tree ul.active').show();
       $('.genealogy-tree li').on('click', function (e) {
           var children = $(this).find('> ul');
           if (children.is(":visible")) children.hide('fast').removeClass('active');
           else children.show('fast').addClass('active');
           e.stopPropagation();
       });
   });
  function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

var updateDiagnosis = function() {
    $.ajax({
      url: '/etricia_Monitor/diagnosis',
      type: 'get',
      dataType: 'json',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(response) {
         console.log('working');}})
 }

</script>
@endsection