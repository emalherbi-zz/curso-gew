<?php

/*
 * Eduardo Malherbi Martins (http://emalherbi.com/)
 * Copyright @emm
 * Full Stack Web Developer.
 */

require_once 'routes.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get('/', function () {
    $dt = date('d/m/Y H:i:s');
    echo "Hello, World. Hora.: ${dt}";
});

$app->run();
