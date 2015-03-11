<?php $view->extend('layout.html.php') ?>
<?php $view['slots']->set('title', 'blog') ?>


<!-- alle Blogeinträge darstellen -->


<div class="container">


    <?php if (isset($success) && $success) { ?>

        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <div class="alert alert-danger" role="alert">Successfully deleted! Reload this page now.</div>
                </div>
            </div>
        </div>

    <?php } ?>



    <?php foreach ($posts as $post) { ?>
        <div class='container featurette forms'>
            <div class='row'>
                <div class='col-xs-12'>


                    <div class='featurette forms head'>
                        <div class="col-md-4"> Post Nr. <?= $post['id'] ?></div>
                        <div class="col-md-4"> Titel: <?= $post['title'] ?> </div>
                        <div class="col-md-4"> Author: <?= $post['author'] ?> </div>
                    </div>
                    <div class="">
                        <?php for ($counter = 0; $counter < 100; $counter++) { // ersten 100 Zeichen des Eintrages
                            if (isset($post['text'][$counter])) {
                                echo $post['text'][$counter];

                            }
                        } ?>
                        <a name="nextid" href="/readfull/<?= $post['id'] ?>">...</a>
                    </div>
                    <br>

                    <div>

                        <div class="row">
                            <div class="col-xs-2">
                                <a class="btn btn-default" name="nextid"
                                   href="/readfull/<?= $post['id'] ?>">read on</a></div>

                            <div class="col-xs-2">
                                <a class="btn btn-default btn-warning" name="nextid"
                                   href="/deletepost/<?= $post['id'] ?>">delete post</a></div>
                        </div>

                    </div>


                </div>
            </div>
        </div>


    <?php } ?>

</div>