<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$Produto = mysqli_escape_string($connect, $_POST['Produto']);
	$quantidade = mysqli_escape_string($connect, $_POST['quantidade']);

	$valor_produto = mysqli_escape_string($connect, $_POST['valor_produto'] );
	
		$valor_total_produto = mysqli_escape_string($connect, $_POST['valor_total_produto']);

	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE clientes SET Produto = '$Produto', quantidade = '$quantidade', valor_produto = '$valor_produto', valor_total_produto = $valor_total_produto WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../homer.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../index.php');
	endif;
endif;
?>
<script type="text/javascript">
	function mutiplicar(){
		document.formulario.valor_total_produto.value=
		Number (document.formulario.quantidade.value)*
		Number (document.formulario.valor_produto.value);
	}

</script>