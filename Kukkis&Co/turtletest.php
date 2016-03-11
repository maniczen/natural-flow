<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>TMNT</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="css/sidebar.css" rel="stylesheet" type="text/css">
  <style>
    .jumbotron {
      background: url(images/pizza_bg.png) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      width: 100%;
      height: 186px;
      margin: auto;
      -webkit-filter: grayscale(40%);
      filter: grayscale(40%);
      margin-bottom: 50;
      box-shadow: 0 0 30px black;
      padding:0 15px 0 15px;
    }
  </style>
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="images/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="images/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="images/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="images/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
  <meta name="application-name" content="TMNT" />
  <meta name="msapplication-TileColor" content="#146600" />
  <meta name="msapplication-TileImage" content="images/mstile-144x144.png" />

</head>

<body>

  <div class="jumbotron">
    <center>
      <img src="images/tmnt_logo.png" width="40%" height="40%">
    </center>
  </div>

  <div id="contentWrapper">
    <div id="contentLeft">
      <ul id="leftNavigation">
        <li class="active"> <a href="index.html"><i class="fa fa-info-circle leftNavIcon"></i> About TMNT</a>
          <ul>
            <li> <a href="index.html#history"><i class="fa fa-angle-right leftNavIcon"></i> TMNT History</a> </li>
            <li> <a href="index.html#contact"><i class="fa fa-angle-right leftNavIcon"></i> Contact the Turtles</a> </li>
            <li> <a href="index.html#team"><i class="fa fa-angle-right leftNavIcon"></i> The TMNT Team</a> </li>
          </ul>
        </li>
        <li class="active"> <a href="characters.html"><i class="fa fa-male leftNavIcon"></i> Characters</a>
          <ul>
            <li> <a href="characters.html#leonardo"><i class="fa fa-angle-right leftNavIcon"></i> Leonardo</a> </li>
            <li> <a href="characters.html#donatello"><i class="fa fa-angle-right leftNavIcon"></i> Donatello</a> </li>
            <li> <a href="characters.html#rafaello"><i class="fa fa-angle-right leftNavIcon"></i> Rafaello</a> </li>
            <li> <a href="characters.html#michelangelo"><i class="fa fa-angle-right leftNavIcon"></i> Michelangelo</a> </li>
            <li> <a href="characters.html#turtletest"><i class="fa fa-question leftNavIcon"></i> Test which Turtle are you</a> </li>
          </ul>
        </li>
        <li class="active"> <a href="comics.html"><i class="fa fa-book leftNavIcon"></i> Comics</a>
          <ul>
            <li> <a href="comics.html#80s"><i class="fa fa-angle-right leftNavIcon"></i> 1980's</a> </li>
            <li> <a href="comics.html#90s"><i class="fa fa-angle-right leftNavIcon"></i> 1990's</a> </li>
            <li> <a href="comics.html#2ks"><i class="fa fa-angle-right leftNavIcon"></i> 2000 -></a> </li>
          </ul>
        </li>
        <li class="active"> <a href="movies.html"><i class="fa fa-film leftNavIcon"></i> Movies</a>
          <ul>
            <li> <a href="movies.html#1stmovies"><i class="fa fa-angle-right leftNavIcon"></i> First trilogy</a> </li>
            <li> <a href="movies.html#newmovies"><i class="fa fa-angle-right leftNavIcon"></i> New movies</a> </li>
          </ul>
        </li>
        <li class="active"> <a href="tv.html"><i class="fa fa-tv leftNavIcon"></i> TV</a>
          <ul>
            <li> <a href="tv.html#tmntseries"><i class="fa fa-angle-right leftNavIcon"></i> Teenage Mutant Ninja Turtles Shows</a> </li>
            <li> <a href="tv.html#otherseries"><i class="fa fa-angle-right leftNavIcon"></i> Other Series</a> </li>
          </ul>
        </li>
        <li class="active"> <a href="games.html"><i class="fa fa-gamepad leftNavIcon"></i> Games</a>
        </li>
    </div>
    <div id="contentRight">
      <h1 id="heading">Teenage Mutant Ninja Turtles</h1>
      <form method="post" action="turtleresults.php">
			Do you like pizza!?<br>
			<input type="radio" name="pitsa" value="kylla" checked>Yes<br>
			<input type="radio" name="pitsa" value="ei">No<br>
			<input type="radio" name="pitsa" value="eos">IDK<br>
			<br><br>
			If you like pizza, what kind do you like?<br>
			<input type="radio" name="tayte" value="salami" checked>Salami<br>
			<input type="radio" name="tayte" value="kermavaahto">Whipped cream!<br>
			<input type="radio" name="tayte" value="ei">I still don't like pizza<br>
			<br><br>
			Do you consider yourself smart?<br>
			<input type="radio" name="fiksu" value="kylla" checked>Yes<br>
			<input type="radio" name="fiksu" value="ei">No<br>
			<input type="radio" name="fiksu" value="eos">Maybe<br>
			<br><br>
			<input type="submit" value="Submit">
		</form>
    </div>
  </div>

</body>

</html>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/VerticalNavigation.min.js"></script>
<script src="js/sidebar.js"></script>
<script src="js/jquery.nail.min.js">