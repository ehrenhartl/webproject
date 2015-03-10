<?php $view->extend('layout.html.php') ?>
<?php $view['slots']->set('title', 'home') ?>



<?php if (isset($err) && $err) { ?>

    <div class="container">

        <div class="alert alert-danger" role="alert">Bitte alle Felder ausfüllen!</div>
    </div>

<?php } ?>
<div class="container">
<form method="post">


    <label for="titel">Please insert your name</label>

    <div class="form-group">
        <input type="text" id="name" name="name" class="form-control"
               placeholder="name">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>