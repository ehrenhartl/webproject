<?php
$view->extend('layout.html.php');
$view['slots']->set('title', 'Eintrag: '. $id);
?>

<!-- Datei, die zum darstellen eines einzelnen Beitrags genutzt wird -->

<body>
<div class="container">
    <!-- Platzhalter -->
    <div class = "col-xs-1"></div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <h3><?php echo "Titel: " . $posts['title'] ?></h3>
                </div>
                <div class="panel-body">
                    <?php echo $posts['text'] ?>
                </div>
            </div>
        </div>
    </div>
    <div class = "col-xs-1"></div>
</div>
</body>