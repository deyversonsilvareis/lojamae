<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// Clear
function clear($input ) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}


if(isset($_POST['btn-cadastrar'])):
	$Produto = clear($_POST['Produto']);
	$quantidade = clear($_POST['quantidade']);
	$valor_produto = clear($_POST['valor_produto']);
	$valor_total_produto = clear($_POST['valor_total_produto']);

	$sql = "INSERT INTO clientes (Produto, quantidade, valor_produto, valor_total_produto) VALUES ('$Produto', '$quantidade', '$valor_produto','$valor_total_produto')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../homer.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php');
	endif;
endif;