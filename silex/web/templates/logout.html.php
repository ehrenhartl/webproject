<?php
/**
 * @var $view
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 *
 */

?>

<?php $view->extend('layout.html.php') ?>
<?php $view['slots']->set('title', 'form') ?>


<div class="container featurette forms">

    <div class="alert alert-success" role="alert">You are now logged out.</div>
    <div class="container">
        <form method='post' action='/blog'>
            <nav>
                <ul class="pager forms">
                    <li class="next"><a name='nextid' href='/blog'> Watch the blog! <span aria-hidden='true'> &rarr;
                </span></a></li>
                </ul>
            </nav>
        </form>
    </div>
</div>
