<!DOCTYPE html><html>
	<head>
		<meta charset="utf-8" />
		<title>Portal społecznościowy</title>
		<link rel="stylesheet" href="styl1.css" />
	</head>
	<body>
		<section id="baner">
			<h1>Portal Ogłoszeniowy</h1>
		</section>
		
		<section id="lewy">
			<h2>Kategorie ogłoszeń</h2>
			<ol>
				<li>Książki</li>
				<li>Muzyka</li>
				<li>Filmy</li>
			</ol>
			
			<img src="ksiazki.jpg" alt="Kupię / sprzedam książkę" />
			
			<table>
				<tr>
					<td>Liczba ogloszeń</td><td>Cena ogłoszenia</td><td>Bonus</td>
				</tr>
				
				<tr>
					<td>1-10</td><td>1 PLN</td><td rowspan="3">Subskrybcja newslettera to upust 0,20 PLN na ogłoszenie</td>
				</tr>
				
				<tr>
					<td>11-50</td><td>0,80 PLN</td>
				</tr>
				
				<tr>
					<td>51 i więcej</td><td>0,60 PLN</td>
				</tr>
				
				
			</table>
		</section>
		<section id="prawy">
			<h2>Ogłoszenia kategorii książki</h2>
			<?php 
				$conn = mysqli_connect("localhost","root","","ogloszenia");
				$zap1 = "SELECT id, tytul, tresc FROM ogloszenie WHERE kategoria = 1;";
				$zap2 = "SELECT uzytkownik.telefon FROM uzytkownik JOIN ogloszenie ON uzytkownik.id = ogloszenie.uzytkownik_id";
				$que = mysqli_query($conn,$zap1);
				$que2 = mysqli_query($conn,$zap2);

				while($row=mysqli_fetch_row($que)){
					echo "<h3>{$row[0]} {$row[1]}</h3>";
					echo "<p>{$row[2]}</p>";
					
					if($row2=mysqli_fetch_row($que2)){
						echo "<p>Telefon kontaktowy: {$row2[0]}</p>";
					}
				}
				mysqli_close($conn);
			
			?>
		</section>
		
		<section id="stopka">Portal ogłoszeniowy opracował: zonel</section>
	</body>
</html>