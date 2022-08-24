
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
        label: 'Power (w)',
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
        label: 'Consumption (Wh)',
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
      url: 'voltcharts',
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
          curChart.data.datasets[0].data.push(data.power);
          joto.data.labels.push(data.created_at);
          joto.data.datasets[0].data.push(data.consumption);
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
  var updateDiagnosis = function() {
    $.ajax({
      url: './etricia_Monitor',
      type: 'get',
      dataType: 'json',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(response) {
         console.log('working');}})
 }
function loadlink(){
    $('#MonitorControl').load('./etricia_Monitor',function () {
         $(this).unwrap();
    });
}
 
  updateChart();
  loadlink();
  setInterval(() => {
    updateDiagnosis();
    updateChart();
    loadlink();
  }, 100000);
