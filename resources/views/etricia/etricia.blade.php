@extends('layouts.powerpack')
@section('title')
Etricia | Monitoring
@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="row">
   <div class="col-md-12">
      <div class="card ">
         <div class="card-header" style="padding: 0px">
            <div class="tab">
               <button class="tablinks" onclick="openCity(event, 'MonitorControl')" id="defaultOpen">Monitor/Control</button>
               <button class="tablinks" onclick="openCity(event, 'Charts')">Charts</button>
               <button class="tablinks" onclick="openCity(event, 'Records')">Records</button>
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
                                       <p>{{$controlStatus->MasterControl}}</p>
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
                                             <p> {{$Parameters->updated_at}} </p>
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
                                                            <div class="skills html">{{$batery[0]}}%</div>
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
                              <li class="active">
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
                                 <ul class="active">
                                    <li>
                                       <a href="javascript:void(0);">
                                          <div class="member-view-box">
                                             <div class="member-image">
                                             <img src="../images/tree/power.png" alt="Member">
                                                <div id="switch_status">
                                                   <p>{{$controlStatus->relay_1}}</p>
                                                </div>
                                             </div>
                                             <table class="table">
                                                <tbody>
                                                   <tr>
                                                      <td>
                                                         <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn btn-primary active">
                                                            <input type="radio" name="options" id="power_on" autocomplete="off"> 
                                                            ON
                                                            </label>
                                                            <label class="btn btn-primary">
                                                            <input   type="radio" name="options" id="power_off" autocomplete="off"> 
                                                            OFF
                                                            </label>
                                                         </div>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <div class="member-view-box">
                                          <div class="member-image">
                                             <img src="../images/tree/charge.png" alt="Member">
                                             <div id="charge_status">
                                             <p>{{$controlStatus->relay_2}}</p>
                                             </div>
                                          </div>
                                          <div class="member-details">
                                             <table class="table">
                                                <tbody>
                                                   <tr>
                                                      <td>
                                                         <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn btn-primary active">
                                                            <input type="radio" name="options" id="charge_on" autocomplete="off"> 
                                                            START
                                                            </label>
                                                            <label class="btn btn-primary">
                                                            <input   type="radio" name="options" id="charge_off" autocomplete="off"> 
                                                            STOP
                                                            </label>
                                                         </div>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                          </a>
                                    </li>
                                    <li>
                                   
                                    <div class="member-view-box" >
                                    <div class="member-image">
                                    <img src="../images/tree/lock.jpg" alt="Member">
                                    <div id="lock_status">
                                    <p>{{$controlStatus->Lock}}</p>
                                    </div>
                                    </div>
                                    <div class="member-details">
                                    <table class="table">
                                    <tbody>
                                    <tr>
                                    <td>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-primary active">
                                    <input type="radio" name="options" id="lock_on" autocomplete="off"> 
                                    LOCK
                                    </label>
                                    <label class="btn btn-primary">
                                    <input   type="radio" name="options" id="lock_off" autocomplete="off"> 
                                    UNLOCK
                                    </label>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </div>
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
        
          <div id="Charts" class="tabcontent">
            <h5 class="title">Analysis</h5>
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
         <div id="Records" class="tabcontent">
            <div class="card">
             <div class="card-header">
               <h5 class="title">Records</h5>
               <button class="btn btn-success  btn-rounded pull-right "  type="submit" id="request_reocrd"> <i class="fas fa-print"></i></button>
               <button class="btn btn-warning  btn-rounded pull-right "  type="submit" id="pdf_records"> <i class="fas fa-file-pdf"></i></button>
               <button class="btn btn-info  btn-rounded pull-right "  type="submit" id="excel_records"> <i class='fas fa-file-excel'></i></button>
            </div>
            <div class="card-body">

            <table class="table table-bordered" style="font-size: 9px;">
               <thead>
                  <tr>
                     <th> DATE</th>
                     <th> Voltage</th>
                     <th> Current</th>
                     <th> Power </th>
                     <th>Consumption </th>
                     <th> Grid </th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($diagnosis as $result)
                  <tr>
                     <td>{{$result->created_at}}</td>
                     <td>{{$result->TempSensor}}</td>
                     <td>{{$result->CurrentSensor}}</td>
                     <td>{{$result->VoltageSensor}}</td>
                     <td>{{$result->RTC}}</td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
            {{$diagnosis-> links()}}
         </div>
      </div>
    </div>
         <div id="Diagnosis" class="tabcontent">
            <div class="card">
             <div class="card-header">
               <h5 class="title">Diagnosis</h5>
               <button class="btn btn-success  btn-rounded pull-right "  type="submit" id="request_diagnosis"> <i class="fas fa-bug"></i>Request Diagnosis</button>
               <button class="btn btn-danger  btn-rounded pull-right "  type="submit" id="stop_request"> <i class="fas fa-times"></i></button>
               <button class="btn btn-info  btn-rounded pull-right "  type="submit" id="excel_diagnosis"> <i class='fas fa-file-excel'></i></button>
              
            </div>
            <div class="card-body">

            <table class="table table-bordered" style="font-size: 9px;">
               <thead>
                  <tr>
                     <th> DATE</th>
                     <th> Temperature Sensor</th>
                     <th> Current Sensor</th>
                     <th> Voltage Sensor </th>
                     <th>Inveter </th>
                     <th> Grid </th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($diagnosis as $result)
                  <tr>
                     <td>{{$result->created_at}}</td>
                     <td>{{$result->TempSensor}}</td>
                     <td>{{$result->CurrentSensor}}</td>
                     <td>{{$result->VoltageSensor}}</td>
                     <td></td>
                     <td>{{$result->RTC}}</td>
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
</div>
</div>
<input type="hidden" id="packcode" name="packcode" value= "{{ Auth::user()->serverip }}">
@endsection
@section('scripts')
<script>
   $(function() {
   $('.genealogy-tree ul').hide();
   $('.genealogy-tree>ul').show();
   $('.genealogy-tree ul.active').show();
   $('.genealogy-tree li').on('click', function(e) {
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
   var packcode_value = document.getElementById('packcode').value;
   var updateDiagnosis = function() {
   $.ajax({
    url: './etricia_Monitor',
    type: 'get',
    dataType: 'json',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function(response) {
      console.log('working');
    }
   })
   }
   $(document).ready(function() {
   $("#power_on").click(function() {
    var packcode_value = document.getElementById('packcode').value;
    console.log(packcode_value);
    $.ajax({
      url: '/etricia_Monitor/control',
      type: 'post',
      data: {
        code: packcode_value,
        command: "PowerOn"
      },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(response) {
        alert(packcode_value + ' is ON ');
        console.log(response);
      }
    });
   });
   $("#power_off").click(function() {
    var packcode_value = document.getElementById('packcode').value;
    console.log(packcode_value);
    $.ajax({
      url: '/etricia_Monitor/control',
      type: 'post',
      data: {
        code: packcode_value,
        command: "PowerOff"
      },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(response) {
        alert(packcode_value + ' is OFF ');
        console.log(response);
      }
    });
   });
   $("#charge_on").click(function() {
    var packcode_value = document.getElementById('packcode').value;
    console.log(packcode_value);
    $.ajax({
      url: '/etricia_Monitor/control',
      type: 'post',
      data: {
        code: packcode_value,
        command: "Charge"
      },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(response) {
        alert(packcode_value + ' is charging');
        console.log(response);
      }
    });
   });
   $("#charge_off").click(function() {
    var packcode_value = document.getElementById('packcode').value;
    console.log(packcode_value);
    $.ajax({
      url: '/etricia_Monitor/control',
      type: 'post',
      data: {
        code: packcode_value,
        command: "Uncharge"
      },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(response) {
        alert(packcode_value + ' has stopped charging');
        console.log(response);
      }
    });
   });
   $("#lock_on").click(function() {
    var packcode_value = document.getElementById('packcode').value;
    console.log(packcode_value);
    $.ajax({
      url: '/etricia_Monitor/control',
      type: 'post',
      data: {
        code: packcode_value,
        command: "Locked"
      },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(response) {
        alert(packcode_value + 'is locked by user');
        console.log(response);
      }
    });
   });
   $("#lock_off").click(function() {
    var packcode_value = document.getElementById('packcode').value;
    console.log(packcode_value);
    $.ajax({
      url: '/etricia_Monitor/control',
      type: 'post',
      data: {
        code: packcode_value,
        command: "UnLocked"
      },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(response) {
        alert(packcode_value + ' is unlocked by user');
        console.log(response);
      }
    });
   });

    $("#request_diagnosis").click(function() {
    var packcode_value = document.getElementById('packcode').value;
    console.log(packcode_value);
    $.ajax({
      url: '/etricia_Monitor/diagnosis/request_diagnosis',
      type: 'post',
      data: {
        code: packcode_value,
        command: "Request_start"
      },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(response) {
        alert(packcode_value + ' start diagnosisr');
        console.log(response);
      }
    });
   });
     $("#stop_request").click(function() {
    var packcode_value = document.getElementById('packcode').value;
    console.log(packcode_value);
    $.ajax({
      url: '/etricia_Monitor/diagnosis/request_diagnosis',
      type: 'post',
      data: {
        code: packcode_value,
        command: "Request_stop"
      },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(response) {
        alert(packcode_value + ' stop diagnosis');
        console.log(response);
      }
    });
   });

//--------excel export diagnosis--------------------------
     $("#excel_diagnosis").click(function() {
    var packcode_value = document.getElementById('packcode').value;
    console.log(packcode_value);
    $.ajax({
      url: '/etricia_Monitor/diagnosis/excel_export',
      type: 'post',
      data: {
           code: packcode_value,
        command: "export_excel"

      },
    
      success: function(response) {
        alert(packcode_value + ' Export excel data');
        console.log(response);
      }
    });
   });

   setInterval(function() {
    $("#switch_status").load(window.location.href + " #switch_status");
    $("#charge_status").load(window.location.href + " #charge_status");
    $("#lock_status").load(window.location.href + " #lock_status");
   }, 1000);
   });
</script>
@endsection
