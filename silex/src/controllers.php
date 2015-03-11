<?php
use Symfony\Component\HttpFoundation\Request;

$app->get('/welcome/{name}', function ($name) use ($app) {
    return $app['templating']->render(
        'hello.html.php',
        array('name' => $name)
    );
});

$app->get('/welcome-twig/{name}', function ($name) use ($app) {
    return $app['twig']->render(
        'hello.html.twig',
        array('name' => $name)
    );
});


$app->get('/static', function (Request $request) use ($app) {

    session_start();
    if ($request->isMethod("post")) {
        $name = $request->get("name", "");
        $password = $request->get("password", "");


        if ($name == "" || $password == "") {
            return $app['templating']->render(
                'newentry.html.php', array('err' => true));
            //$name.$message;

        } else {

            /** @var Doctrine\DBAL\Connection $dbConnection */

            $dbConnection = $app['db'];


            $dbConnection->insert(
                'users',
                array(
                    'name' => $name,
                    'password' => $password,

                )

            );


            return $app['templating']->render(
                'success.html.php');
        }


    } else {
        return $app['templating']->render(
            'static.html.php');
    }
});

$app->match('/blog', function (Request $request) use ($app) {
    session_start();

    $dbConnection = $app['db'];

    $posts = $dbConnection->fetchAll('SELECT * FROM blog_post WHERE title IS NOT NULL');    //important because we dont want to see the new author inserts.
    if (empty($posts)) {

        return $app['templating']->render(
            'emptyblog.html.php'
        );
    }

    return $app['templating']->render(
        'blog.html.php', array(('posts') => $posts));
});


$app->match('/readfull/{id}', function ($id) use ($app) {

    // session_start();
    $dbConnection = $app['db'];


    $posts = $dbConnection->fetchAssoc('SELECT * FROM blog_post WHERE id= ?', array($id));

    return $app['templating']->render('readfull.html.php', array(('posts') => $posts, 'id' => $id));
});

$app->match('/deletepost/{id}', function ($id) use ($app) {
    session_start();
    $dbConnection = $app['db'];


    $dbConnection->delete(
        'blog_post',
        array('id' => $id)

    );

    $posts = $dbConnection->fetchAll('SELECT * FROM blog_post');

    return $app['templating']->render('blog.html.php', array('posts' => $posts, 'id' => $id, 'success' => true));

});


/*
$app->get('/login', function () use ($app) {
    return $app['templating']->render(
        'log.html.php'

    );
});

*/

$app->match('/newentry', function (Request $request) use ($app) {
    session_start();
    if ($request->isMethod("post")) {
        $title = $request->get("title", "");
        $text = $request->get("text", "");
        $name = $_SESSION["username"];

        if ($title == "" || $text == "") {
            return $app['templating']->render(
                'newentry.html.php', array('err' => true));
            //$name.$message;

        } else {

            /** @var Doctrine\DBAL\Connection $dbConnection */

            $dbConnection = $app['db'];
            $date = date('Y-m-d');

            $dbConnection->insert(
                'blog_post',
                array(
                    'title' => $title,
                    'text' => $text,
                    'created_at' => $date,
                    'author' => $name,

                )

            );


            return $app['templating']->render(
                'success.html.php');
            //session_start();
        }


    } else {
        return $app['templating']->render(
            'newentry.html.php'
        );
    }


    //$_POST;
});


$app->match('/login', function (Request $request) use ($app) {

    if ($request->isMethod("post")) {
        $name = $request->get("name", "");
        // $password = $request->get("password", "");


        if ($name == "") {
            return $app['templating']->render(
                'log.html.php', array('err' => true));
            //$name.$message;

        } else {

            /** @var Doctrine\DBAL\Connection $dbConnection */

            session_start();
            $_SESSION["username"] = $name;

            $dbConnection = $app['db'];

            $dbConnection->insert(
                'blog_post',
                array(
                    'author' => $name,
                )

            );


            return $app['templating']->render(
                'static.html.php');
        }


    } else {
        return $app['templating']->render(
            'log.html.php'
        );
    }


    //$_POST;
});


$app->get('/logout', function () use ($app) {
    session_start();
    session_destroy();
    session_unset();


    return $app['templating']->render(
        'logout.html.php'

    );
});
