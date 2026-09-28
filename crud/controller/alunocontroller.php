<?php

// inicia o php

header("Content-Type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");

require_once __DIR__ . "/../function/conexao.php";
require_once __DIR__ . "/../model/aluno.php";

$acao = $_GET["acao"] ?? "";

$aluno = new Aluno($con);

if ($acao === "listar") {

    $alunos = $aluno->listar();

    echo json_encode(["data" => $alunos]);

    exit;
}

http_response_code(400);

echo json_encode(["erro" => "Acao invalida."]);

?>
