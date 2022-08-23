    <x-header  title={{$page_name}}/>
    <x-sidebar/> 
    <!-- Content wrapper -->
     <!-- partial -->
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">Users</p>
                            <h3 class="rate-percentage">{{$users_count}}</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.00%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">Projects</p>
                            <h3 class="rate-percentage">{{$projects}}</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.00%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">Activity</p>
                            <h3 class="rate-percentage">{{$activities}}</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>0.00</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Task</p>
                            <h3 class="rate-percentage">{{$activities}}</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.0%</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Holiday</p>
                            <h3 class="rate-percentage">{{$holidays}}</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>0.00</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Attendances</p>
                            <h3 class="rate-percentage">{{$attendances}}</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.00%</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Performance Attendence</h4>
                                   <h5 class="card-subtitle card-subtitle-dash">Week wise attendence Performance</h5>
                                  </div>
                                  <div id="performance-line-legend"></div>
                                </div>
                                <div class="chartjs-wrapper mt-5">
                                 <canvas id="performaneLine"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                         <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <h4 class="card-title card-title-dash">Activity By Project</h4>
                                    </div>
                                    <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                                    <div id="doughnut-chart-legenddd" class="mt-5 text-center"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <x-footer/>
  

  <script type="text/javascript">
  $(document).ready(function(){

   var SITEURL = "{{ url('get_graph') }}"; 
  $.ajax({
    url:SITEURL,
    method: "GET",
    dataType: "json",
    success: function(data) {
      var name = [];
      var value = [];
      var bgcolor = [];

      for(var i in data) 
      {
        $('#myContainer').append("<p> <span class='fa-xs text-primary mr-1 legend-title'><i class='fa fa-fw fa-square-full'></i></span><span class='legend-text'>"+data[i].name+"</span>  <span class='float-right'>"+data[i].value+"</span></p>");
        name.push(data[i].name);
        value.push(data[i].value);
        bgcolor.push(data[i].bgcolor);
      }




      var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
      var doughnutPieData = {
        datasets: [{
          data:value,
          backgroundColor: ["#1F3BB3",  "#FDD0C7",
            "#52CDFF",
            "#81DADA"
          ],
          borderColor: [
            "#1F3BB3",
            "#FDD0C7",
            "#52CDFF",
            "#81DADA"
          ],
        }],
  
        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels:name
      };
      var doughnutPieOptions = {
        cutoutPercentage: 50,
        animationEasing: "easeOutBounce",
        animateRotate: true,
        animateScale: false,
        responsive: true,
        maintainAspectRatio: true,
        showScale: true,
        legend: false,
        legendCallback: function (chart) {
          var text = [];
          text.push('<div class="chartjs-legend"><ul class="justify-content-center">');
          for (var i = 0; i < chart.data.datasets[0].data.length; i++) {
            text.push('<li><span style="background-color:' + chart.data.datasets[0].backgroundColor[i] + '">');
            text.push('</span>');
            if (chart.data.labels[i]) {
              text.push(chart.data.labels[i]);
            }
            text.push('</li>');
          }
          text.push('</div></ul>');
          return text.join("");
        },
        
        layout: {
          padding: {
            left: 0,
            right: 0,
            top: 0,
            bottom: 0
          }
        },
        tooltips: {
          callbacks: {
            title: function(tooltipItem, data) {
              return data['labels'][tooltipItem[0]['index']];
            },
            label: function(tooltipItem, data) {
              return data['datasets'][0]['data'][tooltipItem['index']];
            }
          },
            
          backgroundColor: '#fff',
          titleFontSize: 14,
          titleFontColor: '#0B0F32',
          bodyFontColor: '#737F8B',
          bodyFontSize: 11,
          displayColors: false
        }
      };
      var doughnutChart = new Chart(doughnutChartCanvas, {
        type: 'doughnut',
        data: doughnutPieData,
        options: doughnutPieOptions
      });
      document.getElementById('doughnut-chart-legenddd').innerHTML = doughnutChart.generateLegend();




        },
        error: function(data) 
          {
          console.log(data);
          }
        });
        });



/*Performance line graph*/

 $(document).ready(function(){

   var SITEURL = "{{ url('get_attendence_graph') }}"; 
   var graphGradient = document.getElementById("performaneLine").getContext('2d');
      var graphGradient2 = document.getElementById("performaneLine").getContext('2d');
      var saleGradientBg = graphGradient.createLinearGradient(5, 0, 5, 100);
      saleGradientBg.addColorStop(0, 'rgba(26, 115, 232, 0.18)');
      saleGradientBg.addColorStop(1, 'rgba(26, 115, 232, 0.02)');
      var saleGradientBg2 = graphGradient2.createLinearGradient(100, 0, 50, 150);
      saleGradientBg2.addColorStop(0, 'rgba(0, 208, 255, 0.19)');
      saleGradientBg2.addColorStop(1, 'rgba(0, 208, 255, 0.03)');



  $.ajax({
    url:SITEURL,
    method: "GET",
    dataType: "json",
    success: function(data) {
      var name = [];
      var value = [];
      var bgcolor = [];
      var pointBorderColor = [];

      for(var i in data) 
        { 
        name.push(data[i].name);
        value.push(data[i].value);
        bgcolor.push('#1F3BB3');
        pointBorderColor.push('#fff');
        }


          var salesTopData = {
          labels: name,
          datasets: [

          {
              label: 'This week',
              data:value,
              backgroundColor: saleGradientBg,
              borderColor: [
                  '#1F3BB3',
              ],
              borderWidth: 1.5,
              fill: true, // 3: no fill
              pointBorderWidth: 1,
              pointRadius: [4, 4],
              pointHoverRadius: [2, 2],
              pointBackgroundColor:bgcolor,
              pointBorderColor:pointBorderColor,
          },

          /*{
            label: 'Last week',
            data: [30, 150, 190, 250, 120, 150, 130, 20, 30, 15, 40, 95, 180],
            backgroundColor: saleGradientBg2,
            borderColor: [
                '#52CDFF',
            ],
            borderWidth: 1.5,
            fill: true, // 3: no fill
            pointBorderWidth: 1,
            pointRadius: [0, 0, 0, 4, 0],
            pointHoverRadius: [0, 0, 0, 2, 0],
            pointBackgroundColor: ['#52CDFF)', '#52CDFF', '#52CDFF', '#52CDFF','#52CDFF)', '#52CDFF', '#52CDFF', '#52CDFF','#52CDFF)', '#52CDFF', '#52CDFF', '#52CDFF','#52CDFF)'],
              pointBorderColor: ['#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff',],
        }*/]
      };

      var salesTopOptions = {
        responsive: true,
        maintainAspectRatio: false,
          scales: {
              yAxes: [{
                  gridLines: {
                      display: true,
                      drawBorder: false,
                      color:"#F0F0F0",
                      zeroLineColor: '#F0F0F0',
                  },
                  ticks: {
                    beginAtZero: false,
                    autoSkip: true,
                    maxTicksLimit: 4,
                    fontSize: 10,
                    color:"#6B778C"
                  }
              }],
              xAxes: [{
                gridLines: {
                    display: false,
                    drawBorder: false,
                },
                ticks: {
                  beginAtZero: false,
                  autoSkip: true,
                  maxTicksLimit: 7,
                  fontSize: 10,
                  color:"#6B778C"
                }
            }],
          },
          legend:false,
          legendCallback: function (chart) {
            var text = [];
            text.push('<div class="chartjs-legend"><ul>');
            for (var i = 0; i < chart.data.datasets.length; i++) {
              console.log(chart.data.datasets[i]); // see what's inside the obj.
              text.push('<li>');
              text.push('<span style="background-color:' + chart.data.datasets[i].borderColor + '">' + '</span>');
              text.push(chart.data.datasets[i].label);
              text.push('</li>');
            }
            text.push('</ul></div>');
            return text.join("");
          },
          
          elements: {
              line: {
                  tension: 0.4,
              }
          },
          tooltips: {
              backgroundColor: 'rgba(31, 59, 179, 1)',
          }
      }
      var salesTop = new Chart(graphGradient, {
          type: 'line',
          data: salesTopData,
          options: salesTopOptions
      });
      document.getElementById('performance-line-legend').innerHTML = salesTop.generateLegend();









        },
        error: function(data) 
          {
          console.log(data);
          }
        });
        });






     
    
  
      
            </script>
