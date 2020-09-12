<?php 

				$sql = "SELECT * FROM clientes";
				$resultado = mysqli_query($connect, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['Produto']; ?></td>
				</tr>
				
<?php  
endwhile;
endif;
?>