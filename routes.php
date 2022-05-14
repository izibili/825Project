<?php

// Bootstrap Slim Framework
$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true, // you would want this false in production
    ],
]);

$app->get('/authors', '\Api\Authors\AuthorsController:index');

$app->get('/books', '\Api\Books\BooksController:index');
$app->get('/currencies', '\Api\Currencies\CurrencyController:index');
$app->get('/books/create', '\Api\Books\BooksController:create');

(new \Api\App(new \Api\Config($_ENV)))->run($app);
//$app->run();
