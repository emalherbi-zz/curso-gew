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

    $result = $mysql->fetchAll2('SELECT * FROM ESTOQUE');
    echo '{ "result" : '.json_encode($result).'}';
}

function row($id)
{
    global $mysql;

    $result = $mysql->fetchRow2("SELECT * FROM ESTOQUE WHERE 1 = 1 AND ID_ESTOQUE = {$id}");
    echo '{ "result" : '.json_encode($result).'}';
}

function insert()
{
    global $mysql;

    $result = new stdClass();
    $result->status = true;
    $result->msg = '';

    $request = \Slim\Slim::getInstance()->request();
    $body = json_decode($request->getBody());

    $idProduto = $body->idProduto;
    $qtde = $body->qtde;
    $ativo = $body->ativo;

    $sql = ' ';
    $sql .= ' INSERT INTO ESTOQUE (ID_PRODUTO, QTDE, ATIVO) ';
    $sql .= " VALUES ({$idProduto}, {$qtde}, {$ativo}) ";

    $result->status = $mysql->execute($sql);

    if (false === $result->status) {
        $result->msg = 'Ops. Ocorreu um erro ao salvar!';
    }

    echo '{ "result" : '.json_encode($result).'}';
}

function update($id)
{
    global $mysql;

    $result = new stdClass();
    $result->status = true;
    $result->msg = '';

    $request = \Slim\Slim::getInstance()->request();
    $body = json_decode($request->getBody());

    $idProduto = $body->idProduto;
    $qtde = $body->qtde;
    $ativo = $body->ativo;

    $sql = ' ';
    $sql .= ' UPDATE ESTOQUE ';
    $sql .= " SET ID_PRODUTO = {$idProduto}, QTDE = {$qtde}, ATIVO = {$ativo} ";
    $sql .= " WHERE ID_ESTOQUE = {$id} ";

    $result->status = $mysql->execute($sql);

    if (false === $result->status) {
        $result->msg = 'Ops. Ocorreu um erro ao atualizar!';
    }

    echo '{ "result" : '.json_encode($result).'}';
}

function delete($id)
{
    global $mysql;

    $result = new stdClass();
    $result->status = true;
    $result->msg = '';

    $sql = ' ';
    $sql .= ' DELETE FROM ESTOQUE ';
    $sql .= " WHERE ID_ESTOQUE = {$id} ";

    $result->status = $mysql->execute($sql);

    if (false === $result->status) {
        $result->msg = 'Ops. Ocorreu um erro ao deletar!';
    }

    echo '{ "result" : '.json_encode($result).'}';
}
