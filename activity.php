<?php include 'header.php'; ?>

<html>
  <head>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2> Games Our Campers Have Built </h2>
    <br>
    <br>
    <link rel="stylesheet" href="Games/style.css" type="text/css">
    <script src="Games/jquery.min.js"></script>
    <script src="Games/sugar-1.2.5.min.js"></script>
    <h3>Exhibit A: Pong</h3>
    <br><br><br><br>
    <script type="text/javascript" src="Games/pong.js"></script>
    <br><br><br><br><br><br><br><br>
    <h3>Exhibit B: Tic-Tac-Toe</h3>
    <script type="text/javascript" src="Games/tic.js"></script>
  </head>
  <body class="theme-01">

    <div id="game-container"></div>

    <script type="text/x-template" id="game-template">
    <div id="menu-container">
      <br><br><br><br>
      <ul id="menu" class="hidden">
        <li id="time">Moves:</li>
        <li id="status">Player X Wins!</li>
        <li><a href="#restart" id="restart" class="button">RESTART</a></li>
      </ul>
    </div>

    <table id="game" cellpadding="0" cellspacing="0">
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
    </script>

  </body>
</html>


<? include 'footer.php'; ?>
