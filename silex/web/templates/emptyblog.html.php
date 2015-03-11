<?php
/**
 * @var $view
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 *
 */

?>
<?php $view->extend('layout.html.php') ?>
<?php $view['slots']->set('title', 'blog') ?>



<div class="container featurette">
    <div class="forms">
        <div class="head">
            <h3>There is no post yet!</h3>
        </div>
        <div>
            All you have to do login and create a new blogpost.
        </div>
    </div>
</div>