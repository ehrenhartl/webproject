<?php $view->extend('layout.html.php') ?>
<?php $view['slots']->set('title', 'new entry') ?>



<?php if (isset($err) && $err) { ?>

    <div class="container">

        <div class="alert alert-danger" role="alert">Bitte alle Felder ausfüllen!</div>
    </div>

<?php } ?>

<?php

if (isset($_SESSION['username'])){
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Neuer Beitrag</div>
                <div>

                    <div class="panel-body">

                        <form method="post">


                            <label for="titel">title</label>

                            <div class="form-group">
                                <input type="text" id="title" name="title" class="form-control"
                                       placeholder="title">


                            </div>
                            <label for="text">Your Post</label>
                            <textarea class="form-control" id="text" name="text" placeholder="insert your blogpost" rows="2"></textarea>
                            </br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}
else { ?>
    <div class="container">


        <div class="panel panel-default panel-info ">
            <div class="panel-heading">
                <h3 class="panel-title">You are not logged in!</h3>
            </div>
            <div class="panel-body">
                All you have to do is press the dropdown menu and then login.
            </div>
</div>
<div class="row">
    <div class="handsup col-sm-1 col-md-offset-11">
  <div class="glyphicon glyphicon-hand-up"></div>
  <div class="">Press Login!</div>
</div>

<?php
}
?>

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

