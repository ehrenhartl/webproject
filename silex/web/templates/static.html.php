<?php $view->extend('layout.html.php') ?>
<?php $view['slots']->set('title', 'home') ?>




<?php if (isset($err) && $err) { ?>

    <div class="container">

        <div class="alert alert-danger" role="alert">Bitte alle Felder ausfüllen!</div>
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
    <div class="featurette" id="about">
        <img class="featurette-image img-rounded img-responsive pull-right" src="../img/Sky.jpg">
        <h2 class="featurette-heading">This is my first Picture
            <span class="text-muted">And it is pretty cool</span>
        </h2>
        <p class="description">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>

    <hr class="featurette-divider">

    <!-- Second Featurette -->
    <div class="featurette" id="services">
        <img class="featurette-image img-rounded img-responsive pull-left" src="../img/DSC_1380_002.JPG">
        <h2 class="featurette-heading">That is the second picture.
            <span class="text-muted">Its Pretty Cool Too.</span>
        </h2>
        <p class="description">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>

    <hr class="featurette-divider">


</div>
<!-- /.container -->


    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



