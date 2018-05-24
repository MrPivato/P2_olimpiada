<!DOCTYPE html>
<html>
<head>
	<?php  
		include 'links.html';
	?>
</head>
<body>

	<?php 
		include 'header.html';
	 ?>

	 <section>
	 	
	 	<form action="contato.php" name="FormContato" method="post">

	  			Nome*: <input type="text" name="Nome" required><br>
	  			
	  			<br>
	  			
	  			Sexo*: <input type="radio" name="Sexo" value="Feminino" required>Feminino
	  				  <input type="radio" name="Sexo" value="Masculino" required>Masculino<br>
	  			
	  			<br>
	  			
	  			E-mail*: <input type="email" name="E-mail" required><br>

	  			<br>

	  			RG: <input type="number" name="RG"><br>

	  			<br>

	 			Idade: <input type="number" name="RG"><br>

	 			<br>

	 			Mensagem*: <input type="text" name="Mensagem" required><br>

	 			<br>

	 			Setor para envio:

	 			<select name="Setor" required>

	 				<option disabled>Selecione o setor:</option>
	 				<option selected name="Setor" value="Comunic">Comunicação</option>
	 				<option name="Setor" value="Adm">Administrativo</option>
	 				<option name="Setor" value="Esp">Esportes</option>

	 			</select><br>

	 			<br>

	 			<input type="submit" name="Enviar" value="Enviar">
	 			<input type="reset" name="Reset" value="Reset"><br>

	 			<br>
	 	</form>

	 	<?php 

			if (!isset($_POST['Enviar'])) {
				echo '&nbsp;';
			}else{
				array_pop($_POST);
				echo '<hr>';
				foreach ($_POST as $key => $val){ 
					echo $key . ': ' . $_POST[$key] . '<br>';
				}
				echo "<br>";
				echo "Obrigado pelo contato e pela colaboração!";
			}		

	 	?>

	 </section>


	 <?php 
		include 'footer.html';
	 ?>

</body>
</html>