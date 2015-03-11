<?php
/**
 * @var $view
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 *
 */

?>
<?php $view->extend('layout.html.php') ?>
<?php $view['slots']->set('title', 'home') ?>




<?php if (isset($err) && $err) { ?>

    <div class="container">

        <div class="alert alert-danger" role="alert">One field was empty!</div>
    </div>

<?php } ?>

<header class="header-image">
    <div class="headline">
        <div class="container">
            <h1>Welcome to my Photoblog</h1>

            <h2>Feel free to write a post!</h2>
        </div>
    </div>
</header>

<!-- Page Content -->
<div class="container">

    <hr class="featurette-divider">

    <!-- First Featurette -->
    <div class="featurette">
        <img class="featurette-image img-rounded img-responsive pull-right" alt="picture of a sky" src="../img/Sky.jpg">

        <h2 class="featurette-heading">This is my first Picture
            <span class="text-muted">And it is pretty cool</span>
        </h2>

        <p class="description">Sky and some trees.</p>
    </div>

    <hr class="featurette-divider">

    <!-- Second Featurette -->
    <div class="featurette">
        <img class="featurette-image img-rounded img-responsive pull-left" alt="picture of the skyline of frankfurt"
             src="../img/DSC_1380_002.JPG">

        <h2 class="featurette-heading">That is the second picture.
            <span class="text-muted">Its Pretty Cool Too.</span>
        </h2>

        <p class="description">That is the skyline in frankfurt.</p>
    </div>

    <hr class="featurette-divider">


</div>
<!-- /.container -->
<div class="container">

    <div class="col-md-6">
        <ul class="list-group">
            <li class="list-group-item list-group-item-success">Lorem amet, ctr, sed diam nonumy eirmod tempor invidunt
                ut l
            </li>
            <li class="list-group-item list-group-item-info">Loremt amet, consetetur sadipscing elitr,mod tempor
                invidunt ut lro
            </li>
            <li class="list-group-item list-group-item-warning">Port Lorem ipsg elitr, sed diar invidunt ut lconsectetur
                ac
            </li>
            <li class="list-group-item list-group-item-danger">Vest dolor sity eirmod tempor invidunt ut llum at eros
            </li>
        </ul>

    </div>
    <div class="col-md-6"><!-- List group -->
        <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>

        </ul>
    </div>


</div>

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



