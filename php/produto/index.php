<?php

/*
 * Eduardo Malherbi Martins (http://emalherbi.com/)
 * Copyright @emm
 * Full Stack Web Developer.
 */

require_once '../routes.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();
$app->add(new \CorsSlim\CorsSlim());
$app->response()->headers()->set('content-type', 'application/json; charset=utf-8');
$app->get('/', 'all');
$app->run();

function all()
{
    global $mysql;

    $result = $mysql->fetchAll2('SELECT * FROM PRODUTO');
    echo '{ "result" : '.json_encode($result).'}';
}
