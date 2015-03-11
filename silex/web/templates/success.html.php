<?php $view->extend('layout.html.php') ?>
<?php $view['slots']->set('title', 'form') ?>


<div class="container">

    <div class="alert alert-success" role="alert">Thank you.</div>

    <form method='post' action='/blog'>
        <nav>
            <ul class="pager">
                <li class="next"><a type='submit' name='nextid' href='/blog'> Blog <span aria-hidden='true'> &rarr;
                </span></a></li>
            </ul>
        </nav>
    </form>

</div>
