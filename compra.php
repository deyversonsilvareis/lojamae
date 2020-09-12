<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Message
include_once 'includes/message.php';
?> 	

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="row">
	<div class="col s12 m8 push-m2">
		<h5 class="light"> suas compras
			<p>No dia</p><?php 
     echo date("d/m/Y ");
		 ?>
		 <p>🙏Em nome de Jesus🙏</p>
		 </h5>
		
		<table class="striped">
			<thead>
				<tr>
					<th>Produto:</th>
					<th>Quantidade:</th>
					<th>Valor Produto:</th>
					<th>valor Total Produtos:</th>
					
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM clientes";
				$resultado = mysqli_query($connect, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['Produto']; ?></td>
					<td><?php echo $dados['quantidade']; ?></td>
					<td><?php echo $dados['valor_produto']; ?></td>
					<td><?php echo $dados['valor_total_produto']; ?></td>
					
					    </div>
					  </div>


				</tr>
			   <?php 
				endwhile;
				else: ?>

				<tr>
					<script>alert('voce não fez suas compras!')</script>
<meta http-equiv="refresh" content="0,url=index.php">
					
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>

			   <?php 
				endif;
			   ?>

			</tbody>
		</table>
		
	</div>
</div>

<div class="row">
	<div class="col s12 m8 push-m2">
	
		<form name="formulario">
		<table class="striped">
			<thead>
				<tr>
					<th>Produto:</th>
					<th>Quantidade:</th>
					<th>Valor Produto:</th>
					<th>valor Total Produtos:</th>
					
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM clientes";
				$resultado = mysqli_query($connect, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
						
					    </div>
					  </div>


				</tr>
			   <?php 
				endwhile;
				else: ?>

				<tr>
					
					
					<td>-</td>
					
					
				</tr>

			   <?php 
				endif;
			   ?>

			</tbody>
		</table>
		</form>
	</div>
</div>
</body>
<script type="text/javascript">
	function mutiplicar(){
		document.formulario.valorcompra.value=
		Number (document.formulario.soma.value)+
		Number (document.formulario.valor_produto.value);
	}

</script>

</html>
<?php
// Footer
include_once 'includes/footer.php';
?>