<?php

$host = 'localhost';
$dbname = 'agenda';
$user = 'root';
$pass = '1234';

try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    //ativar modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    //erro na conexao
    $error = $e->getMessage();
    echo "Erro: $error";
}