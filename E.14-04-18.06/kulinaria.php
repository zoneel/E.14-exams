<!DOCTYPE html><html>
    <head>
        <meta charset="utf-8" />
        <title>Restauracja Kulinaria.pl</title>
        <link rel="stylesheet" href="styl4.css" />
    </head>
    <body>
        <section id="baner"><h2>Restauracja Kulinaria.pl Zaprasza!</h2></section>

        <section id="lewy">
            <?php 
                $conn = mysqli_connect("localhost","root","","baza");
                $kwe = "SELECT MIN(cena) FROM dania WHERE typ=2;";
                $que = mysqli_query($conn, $kwe);

                while($row=mysqli_fetch_row($que)){
                    echo "<p>Dania mięsne zamówisz już od {$row[0]} Złotych</p>";
                }
            ?>
            <img src="menu.jpg" alt="pyszne spagetti" /><br />
            <a href="menu.jpg">Pobierz obraz</a>
        </section>
        <section id="srodek">
            <h3>Przekąski</h3>
            <?php 
                $conn = mysqli_connect("localhost","root","","baza");
                $kwe = "SELECT id, nazwa, cena FROM dania WHERE typ = 3;";
                $que = mysqli_query($conn, $kwe);

                while($row=mysqli_fetch_row($que)){
                    echo "<p>{$row[0]} {$row[1]} {$row[2]}</p>";
                }
            ?>
        </section>
        <section id="prawy">
            <h3>Napoje</h3>
            <?php 
                $conn = mysqli_connect("localhost","root","","baza");
                $kwe = "SELECT id, nazwa, cena FROM dania WHERE typ = 4;";
                $que = mysqli_query($conn, $kwe);

                while($row=mysqli_fetch_row($que)){
                    echo "<p>{$row[0]} {$row[1]} {$row[2]}</p>";
                }
            ?>
        </section>

        <section id="stopka">
            Stronę internetową opracował: zonel
        </section>
    </body>
</html>