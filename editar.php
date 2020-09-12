<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM clientes WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar Compras </h3>
		<form action="php_action/update.php" method="POST" name="formulario">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			<div class="input-field col s12">
				<input type="text" name="Produto" id="Produto" value="<?php echo $dados['Produto'];?>">
				<label for="Produto">Produto</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="quantidade" value="<?php echo $dados['quantidade'];?>" id="quantidade">
				<label for="quantidade">Quantidade</label>
			</div>


			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['valor_produto'];?>" name="valor_produto" id="valor_produto" onchange="mutiplicar()">
				<label for="valor_produto">ValorProduto</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['valor_total_produto'];?>" name="valor_total_produto" id="valor_total_produto">
				<label for="valor_total_produto">valor Total Produto</label>
			</div>

			<button type="submit" name="btn-editar" class="btn"> Atualizar</button>
			<a href="homer.php" class="btn green"> Lista de clientes </a>
		</form>
		
	</div>
</div>
<script type="text/javascript">
	function mutiplicar(){
		document.formulario.valor_total_produto.value=
		Number (document.formulario.quantidade.value)*
		Number (document.formulario.valor_produto.value);
	}

</script>

<?php
// Footer
include_once 'includes/footer.php';
?>
