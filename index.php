<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Pokedex">
    <meta name="author" content="John Harrison">

    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="images/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="images/favicon/manifest.json">
    <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <title>Pokedex</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
        crossorigin="anonymous">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="jumbotron">
        <div class="container">
            <div class="pokehead">
                <div class="poketitle col-md-4 cold-sm-12">
                    <h1>Pokédex</h1>
                </div>
            </div>
            <div class="pokeball-icon col-md-8">
                <img class="pull-right img-responsive" src="images/poke-ball.svg">
            </div>
        </div>
        <div class="pokeball-bottom">
        </div>
    </div>


    <div class="main-body">
        <div class="container">
            <form>
                <select class="form-control" id="pokeSelect" onchange="change(this);">
            </select>
            </form>

            <div class="pokemon" id="pokemon">

                <div class="row">
                    <div class="sprite col-md-1">
                        <img src="" id="sprite">
                    </div>

                    <div class="sprite col-md-11">
                        <h2>
              <span>#</span>
              <span id="natdexno"></span> <span id="name"></span><br />
            </h2>
                        <span>Type: </span><span id="types"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="abilities col-md-4">
                        <h3>Abilities</h3>
                        <ul id="abilities">
                        </ul>
                    </div>

                    <div class="description col-md-12">
                        <h3>
				<span>Description: </span><br />
			  </h3>
                        <span id="description"></span>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="text-muted">
                <span class="footer-text">
					&copy; 2016 John Harrison
				</span>
                <span class="pull-right footer-icons">
                    <a href="https://github.com/PlasticlightS"><i class="fa fa-github-square" aria-label="GitHub""></i></a>
                    <span class="spacer"></span>
                <a href="https://uk.linkedin.com/in/johnrichardharrison"><i class="fa fa-linkedin-square" aria-label="LinkedIn"></i></a>
                <span class="spacer"></span>
                <a class="inline" href="mailto:john.mike.harrison@gmail.com"><i class="fa fa-envelope-o" aria-label="Email"></i></a>
                <span class="spacer"></span>
                <a href="files/JohnHarrison_CV-2016.doc"><i class="fa fa-file-word-o" aria-label="CV"></i></a>
                </span>
            </p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/046a175afa.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <!-- Custom js -->
    <script src="js/pokemon.js"></script>

</body>

</html>
