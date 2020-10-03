@extends('layouts.powerpack')


@section('title')
Iristracker | Etricia
@endsection


@section('content')


      
        <div class="row">
          <div class="col-md-12 ml-auto mr-auto">
            <div class="card card-upgrade">
              <div class="card-header text-center">
                <h4 class="card-title">Etricia Powerpack</h3>
                  <p class="card-category">Are you looking for sustainable reliable source of energy? Blackcience brings yuou the Etricia project which it is a powerpack which can power your home, shop or your productive activities. Your powerpack has the following features.</p>
              </div>
              <div class="card-body">
                <div class="table-responsive table-upgrade">
                  <table class="table">
                    <thead>
                      <th></th>
                      <th class="text-center"> Feauture</th>
                      <th class="text-center">Status</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Components</td>
                        <td class="text-center">{{$result->description}}</td>
                        <td class="text-center">all active </td>
                      </tr>
                      <tr>
                        <td>Number of cells</td>
                        <td class="text-center">Number of cells</td>
                        <td class="text-center">{{$result->cell_number}}</td>
                      </tr>
                      <tr>
                        <td>Capacity</td>
                        <td class="text-center">Power output</td>
                        <td class="text-center">{{$result->capacity}}</td>
                      </tr>
                      
                      <tr>
                        <td>Control, switch off, switch on</td>
                       </tr>
                      <tr>
                        <td class="text-center"></td>
                        <td class="text-center">
                          <BUTTON  id="switchON"  class="btn btn-round btn-success">SWITCH ON</BUTTON>
                        </td>
                        <td class="text-center">
                          <BUTTON id="swichOFF" class="btn btn-round btn-primary">SWITCH OFF</BUTTON>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="col-md-13 ml-auto mr-auto">
            <div class="card card-chart" style="background:#00BFFF;">
              <div class="card-header bg-blue">
              <h5 class="card-title" style="color:white; font-family:Courier;"><center>ETRICIA READINGS</center></h5>
                
              </div>
           
            </div>
          </div>
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
                <h2 class="card-category">CURRENT READINGS</h2>
                
              </div>
           
              <canvas id="Currentchart" width="411" height="190" class="chartjs-render-monitor" style="display: block; width: 411px; height: 190px;"></canvas>
                
              
            </div>
          </div>
                </div>
                <div class="row">
      
          <div class="col-md-12">
            <div class="card card-chart" background="dark";>
              <div class="card-header bg-blue">
                <h2 class="card-category">TEMPERATURE</h2>
                
              </div>
           
                <canvas id="Temperaturechart"></canvas>
                
              
            </div>
          </div>
          </div>


                </div>
              </div>
            </div>
          </div>
        </div>
    
      
@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.0/Chart.min.js"></script>

<script>
var ctx = document.getElementById("S1chart");
  var myChart = new Chart(ctx, {
    cache: false,
    type: 'line',
    data: {
      labels:[],
      datasets: [{
        label: 'Voltage',
        data:[],
        borderWidth: 3
      }]
    },
     options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
  });

  var currentChart = document.getElementById("Currentchart");
  var curChart = new Chart(currentChart, {
    cache: false,
    type: 'bar',
    data: {
      labels:[],
      datasets: [{
        label: 'Current (A)',
        data:[],
        borderWidth: 3
      }]
    },
     options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
  });

  var tempchart = document.getElementById("Temperaturechart");
  var joto = new Chart(tempchart, {
    cache: false,
    type: 'line',
    data: {
      labels:[],
      datasets: [{
        label: 'Temperature (C)',
        data:[],
        borderWidth: 3
      }]
    },
     options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
  });
  var updateChart = function() {
    $.ajax({
      url: "{{route('voltcharts')}}",
      type: 'get',
      dataType: 'json',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(response) {
      
         response.forEach(function(data){
          myChart.data.labels.push(data.created_at);
          myChart.data.datasets[0].data.push(data.volts);
          curChart.data.labels.push(data.created_at);
          curChart.data.datasets[0].data.push(data.current);
          joto.data.labels.push(data.created_at);
          joto.data.datasets[0].data.push(data.Temperature);
          //var earnings = data.bei;

        //$("#earnings").text(earnings);
        //console.log(earnings);
      

        myChart.update();
        curChart.update();
        joto.update();
      });
             },
      error: function(response){
        console.log(response);
      }
    });
    //renderChart(data, labels);<canvas id="lineChartExampleWithNumbersAndGrid" width="411" height="190" class="chartjs-render-monitor" style="display: block; width: 411px; height: 190px;"></canvas>
  }
  
  updateChart();
  setInterval(() => {
    updateCha();
  }, 100000);
</script>

@endsection