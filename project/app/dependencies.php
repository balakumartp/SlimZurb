<?php 
$container = $app->getContainer();

$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(__DIR__ . '/templates', [
        'cache' => __DIR__ . '/cache',
    ]);
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container['router'],
        $container['request']->getUri()
    ));
    $view->getEnvironment()->addGlobal('flash', $container['flash']);
    return $view;
};

$container['flash'] = function () {
    return new \Slim\Flash\Messages();
};

$container['db'] = function ($c) {
    $pdo = new PDO("mysql:host=" . "localhost" . ";dbname=" . "slimdb",
        "root", "password1");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
}; 


 
