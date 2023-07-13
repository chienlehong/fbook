<div class="grid grid-cols-2 gap-2">
  <div class="pl-5 pt-5">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <div id="myChart" style="width:100%; max-width:600px; height:500px;">
    </div>

    <script>
      google.charts.load('current', {
        'packages': ['corechart']
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Contry', 'Mhl'],
          <?php
          $tongdm = count($listthongke);
          $i = 1;
          foreach ($listthongke as $thongke) {
            extract($thongke);
            if ($i == $tongdm) $dauphay = "";
            else $dauphay = ",";
            echo "['" . $thongke['tendm'] . "'," . $thongke['countsp'] . "]" . $dauphay;
            $i += 1;
          }
          ?>

        ]);

        var options = {
          title: 'Thống kê truyện theo danh mục'
        };

        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);
      }
    </script>
  </div>
  <!--theo năm -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <div class="pl-5 pt-16">

    <canvas id="myCharts" style="width:100%;max-width:600px"></canvas>

    <script>

      var xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
      var yValues = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

      new Chart("myCharts", {
        type: "line",
        data: {
          labels: xValues,
          datasets: [{
            fill: false,
            lineTension: 0,
            backgroundColor: "rgba(0,0,255,1.0)",
            borderColor: "rgba(0,0,255,0.1)",
            data: yValues
          }]
        },
        options: {
          legend: {
            display: false
          },
          scales: {
            yAxes: [{
              ticks: {
                min: 6,
                max: 16
              }
            }],
          }
        }
      });
    </script>
  </div>
</div>