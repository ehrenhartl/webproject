<?php
/**
 * @var $view
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 *
 */

?>


<?php $view->extend('layout.html.php') ?>
<?php $view['slots']->set('title', 'home') ?>



<?php if (isset($err) && $err) { ?>         //visible when var err is set and has the value $err (true)

    <div class="container">

        <div class="alert alert-danger" role="alert">One field was empty!</div>
    </div>

<?php } ?>
<div class="container featurette forms">
<form method="post">


    <label>Please insert your name</label>

    <div class="form-group">
        <input type="text" id="name" name="name" class="form-control"
               placeholder="name">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>