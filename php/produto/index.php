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
$app->get('/:id', 'row');
$app->post('/', 'insert');
$app->post('/:id', 'update');
$app->post('/delete/:id', 'delete');
$app->run();

function all()
{
    global $mysql;

    $result = $mysql->fetchAll2('SELECT * FROM PRODUTO');
    echo '{ "result" : '.json_encode($result).'}';
}

function row($id)
{
    global $mysql;

    $result = $mysql->fetchRow2("SELECT * FROM PRODUTO WHERE 1 = 1 AND ID_PRODUTO = {$id}");
    echo '{ "result" : '.json_encode($result).'}';
}

function insert()
{
    global $mysql;

    $request = \Slim\Slim::getInstance()->request();
    $body = json_decode($request->getBody());

    $idProduto = $body->idProduto;
    $qtde = $body->qtde;

    $result = new stdClass();
    $result->status = true;
    $result->msg = 'Ops. Ocorreu um erro ao salvar!';

    $sql = ' ';
    $sql .= ' INSERT INTO ESTOQUE (ID_PRODUTO, QTDE, ATIVO) ';
    $sql .= " VALUES ({$idProduto}, {$qtde}, 1) ";

    $result->status = $mysql->execute($sql);
    echo '{ "result" : '.json_encode($result).'}';
}

function update($id)
{
    global $mysql;

    $request = \Slim\Slim::getInstance()->request();
    $body = json_decode($request->getBody());

    echo '<pre>';
    echo print_r($body);
    echo '<pre>';
    die();

    $result = new stdClass();
    $result->status = true;
    $result->msg = 'Ops. Ocorreu um erro ao atualizar!';

    echo '{ "result" : '.json_encode($result).'}';
}

function delete($id)
{
    global $mysql;

    $result = new stdClass();
    $result->status = true;
    $result->msg = 'Ops. Ocorreu um erro ao deletar!';

    echo '{ "result" : '.json_encode($result).'}';
}
