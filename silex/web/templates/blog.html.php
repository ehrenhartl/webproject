<?php $view->extend('layout.html.php') ?>
<?php $view['slots']->set('title', 'blog') ?>


<!-- alle Blogeinträge darstellen -->


<div class="container">


    <?php if (isset($success) && $success) { ?>

        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <div class="alert alert-danger" role="alert">erfolgreich gelöscht!</div>
                </div>
            </div>
        </div>

    <?php } ?>

    <hr class="featurette-divider">

        <?php foreach ($posts as $post) { ?>
            <div class='container '>
                <div class='row'>
            <div class='col-xs-12'>
                <div class='panel panel-default'>
                    <div class='panel-heading'>
                        <div class='list-group-item featurette'>
                            <h4>Beitrag Nr. <?= $post['id'] ?> Titel: <?= $post['title'] ?>
                                Author: <?= $post['author'] ?> </h4>
                        </div>
                        <div class='panel-body'>
                            <?php for ($counter = 0; $counter < 100; $counter++) { // ersten 100 Zeichen des Eintrages
                                if (isset($post['text'][$counter])) {
                                    echo $post['text'][$counter];
                                }
                            } ?>

                        </div>
                        <br>

                        <div>

                            <div class="row">
                                <div class="col-xs-2">
                                    <a class="btn btn-default" type='submit' name='nextid'
                                       href='/readfull/<?= $post['id'] ?>'>
                                        read on</a></div>

                                <div class="col-xs-2">
                                    <a class="btn btn-default btn-warning" type='submit' name='nextid'
                                       href='/deletepost/<?= $post['id'] ?>'>delete post</a></div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


<?php } ?>

</div>