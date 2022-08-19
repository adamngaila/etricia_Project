@extends('layouts.powerpack')


@section('title')
Etricia | Monitoring
@endsection


@section('content')
<link rel="stylesheet" href="./style.css">

<div class="body genealogy-body genealogy-scroll">
    <div class="genealogy-tree">
        <ul>
            <li>
                <a href="javascript:void(0);">
                    <div class="member-view-box">
                        <div class="member-image">
                            <h2>Control Tree</h2>
                            <div class="member-details">
                                <h3>{{$result->packagecode}}</h3>
                                <br>Status</br>
                            </div>
                        </div>
                    </div>
                </a>
                <ul class="active">
                    <li>
                        <a href="javascript:void(0);">
                            <div class="member-view-box">
                                <div class="member-image">
                                    <img src="store1.png" alt="Member">
                                    <div class="member-details">
                                        <h3>Store A</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <ul >
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="assets.png" alt="Member">
                                            <div class="member-details">
                                                <h3>Assets Store A </h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="products.png" alt="Member">
                                            <div class="member-details">
                                                <h3>Products Store A</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="employee.jpg" alt="Member">
                                            <div class="member-details">
                                                <h3>Employees Store A</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                    <div class="member-details">
                                                        <h3>Member 1-3-1</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                    <div class="member-details">
                                                        <h3>Member 1-3-2</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                    <div class="member-details">
                                                        <h3>Member 1-3-3</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li> 
</ul>
</li>                                               <li>
                        <a href="javascript:void(0);">
                            <div class="member-view-box">
                                <div class="member-image">
                                    <img src="store 2.png" alt="Member">
                                    <div class="member-details">
                                        <h3>Store B </h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <ul class="active">
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                            <div class="member-details">
                                                <h3>John Doe</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                              <ul>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                    <div class="member-details">
                                                        <h3>John Doe</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>

      
    
      
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