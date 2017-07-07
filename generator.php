<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="images/favicon.ico">

    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />

    <meta property="fb:app_id" content="" />

    <title>Xbox Gift Codes</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.unpacker.org/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.unpacker.org/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- particles -->

    <div id="particles-js"></div>

    <!-- header -->

    <nav class="navbar navbar-default navbar-fixed-top">

        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.php">
                    <a href="index.php"><img class="logo-push" src="images/logo-gift.png" height="32" ></a>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a id="home" href="index.php">Home</a>
                    </li>

                    <li class="active">
                        <a id="generator" href="generator.php">Generator</a>
                    </li>

                    <li>
                        <a id="Contact us" href="contact.php">Contact us</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- card-generator-section -->

    <div class="card-generator-section">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <img src="images/brend.png" width="25" alt="">
                    <span class="panel-text">Lorem ipsum dolor sit amet</span>
                </div>

                <div class="panel-body">
                    <h2 class="generator-h2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        <br>
                        <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima earum illo consequatur laudantium.</small>
                    </h2>
                    <div class="generator-container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="img-flex-gen">
                                    <div class="xbox-gen-card">
                                        <img class="img-respo card-value" src="images/10-gift.png" alt="" data-value="10€">
                                    </div>

                                    <div class="xbox-gen-card">
                                        <img class="img-respo card-value" src="images/20-gift.png" alt="" data-value="20€">
                                    </div>

                                    <div class="xbox-gen-card">
                                        <img class="img-respo card-value" src="images/50-gift.png" alt="" data-value="50€">
                                    </div>

                                    <div class="xbox-gen-card">
                                        <img class="img-respo card-value" src="images/100-gift.png" alt="" data-value="100€">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="switch-holder">
                                            <label>Select a Region:</label>
                                            <div class="input-group">
                                                <span class="input-group-addon" ><i class="fa fa-globe fa-lg"></i></span>
                                                <select id="region" class="form-control ubuntu-bold form-text pointer ">
                                                    <option value="North America">North America</option>
                                                    <option value="South America">South America</option>
                                                    <option value="Europe">Europe</option>
                                                    <option value="Russia">Russia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="East Asia">East Asia</option>
                                                    <option value="China">China</option>
                                                    <option value="Oceania">Oceania</option>
                                                </select>
                                                <input id="card" type="hidden" name="" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="switch-holder">
                                            <label>Switch:</label>
                                            <div class="input-group">
                                                <div class="form-group right-switch help-switch">
                                                    <input type="checkbox" id="anon" class="anon" />
                                                    <label class="switch-text" for="anon"><span class="ui"></span></label>
                                                </div>
                                            </div>
                                            <span class="switch-text-help">I agree to terms and conditions</span>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <a class="btn btn-default btn-lg btn-block btn-xbox pulse-shadow generate" >Click Here <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- card-generator-section -->

    <div class="info-generator-section">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <span class="panel-text-info"><i class="fa fa-cogs" aria-hidden="true"></i> Infos Generales</span>
                </div>

                <div class="panel-body">
                    <div class="generator-container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <ul class="list-group">
                                    <li class="list-group-item">Dernière MAJ le: <?php echo  date("d-m-Y") ?></li>
                                    <li class="list-group-item">Serveur Statut: En Ligne</li>
                                    <li class="list-group-item">Cras justo odio: <span id="online"></span></li>
                                    <li class="list-group-item">Votre adresse IP: <?php echo $_SERVER['REMOTE_ADDR'] ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <a class="social-btn" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="social-btn" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="social-btn" href="#"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
            <p class="text-footer">Xbox-Giveaway © 2016. All rights reserved.</p>
        </div>
    </div>

    <!-- modal-console -->

    <div class="modal fade" id="modal-console" tabindex="-1" role="dialog" aria-labelledby="console">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <i class="fa fa-terminal" aria-hidden="true"></i> Console root
                </div>

                <div class="modal-body">
                    <div class="consol-holder">
                        <div class="loader1"></div>
                        <div id="codes" class="text-center"></div>
                    </div>

                    <p id="code" class="p-console show-console-text"></p>
                    <div class="p-console show-console-text display-none info-msg">
                        <div id="code-print" class="gift-code-holder text-center"></div><br>
                        Database has return a code. Last 4 characters are hidden and you won't recive valid code until you complete verification.
                    </div>

                    <div class="consol-btn-holder show-console-text display-none">
                        <!-- change this onclick function with function from  your network. -->
                        <button id="proceed" class="btn btn-default btn-lg btn-block btn-xbox" onclick="alert('demo')">PROCEED TO VERIFY</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- modal-alert -->

    <div class="modal fade" id="modal-alert" tabindex="-1" role="dialog" aria-labelledby="console">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Attention!
                </div>

                <div class="modal-body">
                    <div  class="error-holder p-console error">

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="https://cdn.unpacker.org/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.unpacker.org/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script type="text/javascript">
            //here you can change your consoleMessages just leave text between {}
        hack = [ "Connecting to the  {server}  server ...", "Searching for {card} card ...", "A valid {card} was found ...", "Registering Code with Database...", "Writing Code to file & Uploading...", "Waiting For User..." ];


    </script>
    <script src="scripts/particles.min.js"></script>
    <script src="scripts/jquery.shuffleLetters.js"></script>
    <script src="scripts/script.min.js"></script>

</body>
</html>
