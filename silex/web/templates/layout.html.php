
<?php
/**
 * @var $view
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view["slots"];
$title = $view["slots"]->get("title");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?= $title ?> </title>

    <!--wird leider nicht erkannt: -->
<!--    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
-->

    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="../vendor/jquery/dist/jquery.min.js"></script>
    <script src="../vendor/jquery/dist/jquery.min.js"></script>


    <!-- Das neueste kompilierte und minimierte CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optionales Theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Das neueste kompilierte und minimierte JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

  <!--  <base href="http://localhost:8001/"/>  -->

</head>

<body>

<nav role="navigation" class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/static" class="navbar-brand">Portfolio</a>
            <span class="icon1">
            <a class="visible-lg navbar-brand-middle navbar-brand"><span>Created with </span><span class="icon1 glyphicon glyphicons glyphicon-heart"></span><span> by Leon Ehrenhart</span></a>
            <span>
            </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?= $title == "home" ? "class=\"active\"" : "" ?>>

                    <a class="glyphicon glyphicon-home" href="/static"> home</a></li>

                <li <?= $title == "blog" ? "class=\"active\"" : "" ?>>
                    <a class="glyphicon glyphicon-book" href="/blog"> blog</a></li>

                <li <?= $title == "new entry" ? "class=\"active\"" : "" ?>>
                    <a class="glyphicon glyphicon-pencil" href="/newentry"> write post</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong><?php if (isset($_SESSION["username"]))

                                echo $_SESSION["username"] . "<br>";
                                else echo "Please log in";
                            ?></strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong><?php if (isset($_SESSION["username"]))

                                                    echo "User: " . $_SESSION["username"] . "<br>";
                                                    else echo"Press login";
                                                ?></strong></p>
                                        <p class="text-left small"></p>
                                        <p class="text-left">
                                            <a  href="/login"  class="btn btn-primary btn-block btn-sm">Login</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="/logout" class="btn btn-danger btn-block">Logout</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php $view['slots']->output('_content') ?>

<div class="container bottom">

    <p>

            <img class=" footer-w3c" style="border:0;width:88px;height:31px"
                 src="http://jigsaw.w3.org/css-validator/images/vcss"
                 alt="CSS ist valide!" />
        </a>
    </p>

</div>
</body>
</html>
