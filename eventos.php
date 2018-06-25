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
	 	<table border="1">
	 		<tr>
	 			<th>Horário</th>
	 			<th>Abertura Olimpíadas 2020</th>
	 		</tr>
	 		<tr>
	 			<td>13:00 ~ 17:00</td>
	 			<td><h2>Imagine Dragons</h2><img src="IMG/id1.jpg" width="200px" height="200px"></td>
	 		</tr>

	 	</table>
	 </section>

	 <section>
	 	<table border="1">
	 		<tr>
	 			<th>Horário</th>
	 			<th>Encerramento Olimpíadas 2020</th>
	 		</tr>
	 		<tr>
	 			<td>17:00 ~ 21:00  </td>
	 			<td><h2>Ednaldo Pereira</h2><img src="IMG/ep1.jpg" width="200px" height="200px"></td>

	 		</tr>
	 	</table>
	 </section>

	 <section>
	 	<h2>Galeria de fotos</h2>
	 	<div>
		 	<img class="galeria1" src="IMG/ep1.jpg" width="452px" height="400px">
		 	<img class="galeria2" src="IMG/id1.jpg" width="452px" height="400px">
		</div>
		<div>
		 	<img class="galeria1" src="IMG/ep2.jpg" width="452px" height="400px">
		 	<img class="galeria2" src="IMG/id2.jpg" width="452px" height="400px">
		</div>
		<div>
		 	<img class="galeria1" src="IMG/ep3.jpg" width="452px" height="400px">
		 	<img class="galeria2" src="IMG/id3.jpg" width="452px" height="400px">
		</div>
		<div>
		 	<img class="galeria1" src="IMG/ep4.jpg" width="452px" height="400px">
		 	<img class="galeria2" src="IMG/id4.jpg" width="452px" height="400px">
		</div>
	 </section>

	 <section>

	 	<h2>Amostra de música de Imagine Dragons:</h2>

	 	<audio controls>
	 		<source src="MP3/id1.mp3" type="audio/mpeg">
	 		Seu browser não suporta áudio.
	 	</audio>

	 </section>

	 <section>

	 	<div class="aud">

	 	<h2>Amostra de música de Ednaldo Pereira:</h2>
 	
		 	<audio controls>
		 		<source src="MP3/ed2.mp3" type="audio/mpeg">
		 		Seu browser não suporta áudio.
		 	</audio>
	 	</div>
	 </section>

	 <?php 
		include 'footer.html'; 
	 ?>

</body>
</html>
