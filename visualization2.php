<?php
include 'header.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js"></script>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

<head>
</head>
<html>
  <body>
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
  </body>
</html>

<? include 'footer.php'; ?>
