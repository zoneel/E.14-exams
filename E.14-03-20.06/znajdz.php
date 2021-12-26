<!DOCTYPE html>
    <head>
        <title>Kwiaty</title>
        <link rel="stylesheet" href="styl.css" />

    </head>
    <body>
        <section id="baner"><h1>Moje kwiaty</h1></section>
        
        <section id="lewy">
            <h3>Kwiaty dla Ciebie!</h3>
            <a href="https://www.swiatkwiatow.pl/">Rozpoznaj kwiaty</a>
            <a href="znajdz.php">Znajdz kwiaciarnię</a>
            <img src="gozdzik.jpeg" alt="Goździk" />
        </section>
        <section id="prawy">
            <img src="gerbera.jpeg" alt="gerbera" />
            <img src="gozdzik.jpeg" alt="gozdzik" />
            <img src="roza.jpeg" alt="roza" />
            <p>Podaj miejscowość, w której poszukujesz kwiaciarni:</p>
            <form action="" method="POST" >
                <input type="text" name="miejsce" /><input type="submit" name="guzik" value="SPRAWDŹ" />
            </form>
            <?php 
                    if(isset($_POST['guzik'])){
                        $conn = mysqli_connect("localhost","root","","kwiaciarnia");
                        $miasto = $_POST['miejsce'];
                        $kwe = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto = '{$miasto}';";    
                        $que = mysqli_query($conn, $kwe);

                        while($row=mysqli_fetch_row($que)){
                            echo $row[0]." ,".$row[1];
                        }
                        mysqli_close($conn);

                    }
                ?>

        </section>

        <section id="stopka">
            <h3>Stronę opracował: zonel</h3>
        </section>

    </body>
</html>