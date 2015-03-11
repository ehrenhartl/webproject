<?php
/**
 * @var $view
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 *
 */

?>

<?php $view->extend('layout.html.php') ?>
<?php $view['slots']->set('title', 'new entry') ?>



<?php if (isset($err) && $err) { ?>

    <div class="container">

        <div class="alert alert-danger" role="alert">Don't let one field free!</div>
    </div>

<?php } ?>

<?php

if (isset($_SESSION['username'])) {
    ?>
    <hr class="featurette-divider">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="featurette">
                    <!-- Default panel contents -->
                    <div class="head">New post</div>
                    <div>

                        <div class="forms">

                            <form method="post">


                                <label>Title</label>

                                <div class="form-group">
                                    <input type="text" id="title" name="title" class="form-control"
                                           placeholder="title">


                                </div>
                                <label for="text">Your Post</label>
                                <textarea class="form-control" id="text" name="text" placeholder="insert your text"
                                          rows="2"></textarea>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
} else { ?>
    <div class="container featurette forms">


        <div class="panel-heading">
            <h3 class="panel-title">You are not logged in!</h3>
        </div>
        <div class="panel-body">
            <p>All you have to do is press the dropdown menu and then login.</p>
        </div>

        <div class="row">
            <div class="handsup col-sm-1 col-md-offset-11">
                <div class="glyphicon glyphicon-hand-up"></div>
                <p>Press Login!</p>
            </div>
        </div>
    </div>
<?php
}
?>


<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

