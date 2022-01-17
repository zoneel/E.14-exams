<?php
	$kat = $_POST["kategoria"];
	$podkat = $_POST["podkategoria"];
	$tyt = $_POST["tytul"];
	$tre = $_POST["tresc"];


	$conn = mysqli_connect("localhost","root","","ogloszenia");
	$kwe = "INSERT INTO ogloszenie VALUES (NULL,'1','{$kat}','{$podkat}','{$tyt}','{$tre}');";
	$que = mysqli_query($conn, $kwe);
					
	if($que){
		echo "Wykonalo";
	}else
	if(!$que){
		echo "Nie wykonalo";
	}
				
	mysqli_close($conn); 
	?>
