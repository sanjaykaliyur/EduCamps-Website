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
  <br>
  <br>
  <br>
  <br>
  <center><h2>Enrollment Statistics</h2></center>
</head>
<html>
  <body>
    <div>

      <h3 class="centerMe">2017 Registration (Current)</h3>
      <canvas id="canvas" width="900" height="800" style="padding-top: 100px; margin: auto;"></canvas>
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
      </script>
    </div>



    <div class="col-md-6">
        <img class="img-responsive" src="Images/Statistics/2016StatsCamp.png">
        <img class="img-responsive" src="Images/Statistics/2016StatsLocation.png" style="height=150%;width=200%;">
    </div>

    <div class="col-md-6">
        <img class="img-responsive" src="Images/Statistics/2015StatsCamp.png" style="height=150%;width=200%;">
        <img class="img-responsive" src="Images/Statistics/2015StatsLocation.png" style="height=90%;width=200%;">
    </div>

  </body>
</html>

</script>

<? include 'footer.php'; ?>
