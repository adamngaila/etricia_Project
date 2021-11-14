
          <div class="col-md-12">
            <div class="card card-chart" background="dark";>
              <div class="card-header bg-blue">
                <h2 class="card-category">LIVE PARAMETERS</h2>
                
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

<script>

 
$(function () {
 var tempchart = document.getElementById("Temperaturechart");
  var joto = new Chart(tempchart, {
    cache: false,
    data: {
      labels:[],
      datasets: [{
        type:'line',
        label: 'Temperature (C)',
        data:[],
        borderWidth: 5
      },
      {
            type: 'bar',
            label: 'current (A)',
             data:[1],
              backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
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
   $.ajax({
      url: "/admin/admincharts",
      type: 'get',
      dataType: 'json',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(response) {
      
         response.forEach(function(data){
         // myChart.data.labels.push(data.created_at);
         // myChart.data.datasets[0].data.push(data.volts);
         // curChart.data.labels.push(data.created_at);
          //curChart.data.datasets[0].data.push(data.current);
          joto.data.labels.push(data.created_at);
          joto.data.datasets[0].data.push(data.Temperature);
          joto.data.datasets[1].data.push(data.current);
          //var earnings = data.bei;

        //$("#earnings").text(earnings);
        //console.log(earnings);
      

        //myChart.update();
        //curChart.update();
        joto.update();
      });
             },
      error: function(response){
        console.log(response);
      }
    });
  });
  /*var updateChart = function() {
    $.ajax({
      url: "/admin/admincharts",
      type: 'get',
      dataType: 'json',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(response) {
      
         response.forEach(function(data){
         // myChart.data.labels.push(data.created_at);
         // myChart.data.datasets[0].data.push(data.volts);
         // curChart.data.labels.push(data.created_at);
          //curChart.data.datasets[0].data.push(data.current);
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
  */
</script>
