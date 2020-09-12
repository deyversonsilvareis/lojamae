<?php 
include_once 'includes/header.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 </head>
 <body>
 	<table class="striped">
 <div class="row">
	<div class="col s12 m8 push-m2">
		<h5 class="light"> fazer compras
			<p>No dia</p><?php 
     echo date("d/m/Y ");
		 ?>
		 </h5>
		 <a href="homer.php" class="btn">lista de produtos</a>
		<a href="adicionar.php" class="btn">cadastra novo produto</a>
		</table>
		</div>
 </body>
 </html>
 <?php
// Footer
include_once 'includes/footer.php';
?>