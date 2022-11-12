<?php

$dbHost = 'localhost';
$dbName = 'bookizin';
$dbUser = 'bookizin';
$dbPass = '';

/* Tenta conectar ao Banco de Dados */
try{
	$pdo = new PDO("mysql:host=". $dbHost .":dbName=". $dbName,$dbUser, $dbPass);

    // Define o modo de Erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    die("Não foi possivel conectar". $e->getMessage());
}