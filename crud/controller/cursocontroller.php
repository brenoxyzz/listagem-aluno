<?php

// inicia o php

header("Content-Type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");

require_once __DIR__ . "/../function/conexao.php";
require_once __DIR__ . "/../model/curso.php";

$acao = $_GET["acao"] ?? "";

$curso = new Curso($con);

if ($acao === "listar") {

    $cursos = $curso->listar();

    echo json_encode(["data" => $cursos]);

    exit;
}

http_response_code(400);

echo json_encode(["erro" => "Acao invalida."]);

?>
