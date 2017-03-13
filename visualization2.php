<?php
include 'header.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js"></script>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous">
</script>
<style>
  .centerMe {
    text-align: center;
    bottom: 0;
    padding-bottom: 0px;

  }
</style>
<head>
</head>
<html>
  <body>
    <div>
      <br><br><br><br>
      <h3 class="centerMe">2017 Registration (Current)</h3>
      <canvas id="canvas" width="900" height="800" style="padding-top: 100px; margin: auto;"></canvas>
      <h3 class="centerMe">2016 Registration (Past)</h3>
      <canvas id="canvas2" width="900" height="800" style="padding-top: 100px; margin: auto;"></canvas>
      <script>
        $.ajax({
          type: 'POST',
          url: 'getData.php',
          dataType: 'json',
          success: function (data) {
            var ctx = document.getElementById("canvas");
            var myChart = new Chart(ctx, {
              type: 'bar',
              data: data,
              options: {
                responsive: false,
                  scales: {
                      yAxes: [{
                          ticks: {
                            beginAtZero:true
                          }
                      }]
                  }
              }
            });
          }
        });
        var ctx2 = document.getElementById("canvas2");
        var data = {
    labels: ["Tennis", "Ping Pong", "Baseball", "Trigonometry", "Algebra", "Thermodynamics", "Artificial Intelligence"],
    datasets: [
        {
            label: "2016 Spots Left",
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
            borderWidth: 1,
            data: [45, 25, 50, 50, 35, 49, 40],
        }
    ]
};
        var myBarChart = new Chart(ctx2, {
          type: 'bar',
          data: data,
          options: {
            responsive: false,
              scales: {
                  yAxes: [{
                      ticks: {
                        beginAtZero:true
                      }
                  }]
              }
          }
        });
      </script>
    </div>

  </body>
</html>

</script>

<? include 'footer.php'; ?>
