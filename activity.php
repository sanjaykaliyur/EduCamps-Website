<?php include 'header.php'; ?>

<html>
  <head>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <link rel="stylesheet" href="TicTacToe/style.css" type="text/css">
    <script src="TicTacToe/jquery.min.js"></script>
    <script src="TicTacToe/sugar-1.2.5.min.js"></script>
    <script type="text/javascript" src="TicTacToe/game.js"></script>
  </head>
  <body class="theme-01">
    <h1>Tic Tac Toe</h1>

    <div id="game-container"></div>

    <script type="text/x-template" id="game-template">
    <div id="menu-container">

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
