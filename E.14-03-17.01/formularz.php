<!DOCTYPE html><html>
    <head>
        <meta charset="utf-8" />
        <title>Sklep muzyczny</title>
        <link rel="stylesheet" href="muzyka.css" />
    </head>
    <body>
        <section id="baner">
            <h1>SKLEP MUZYCZNY</h1>
        </section>

        <section id="lewy">
            <h2>NASZA OFERTA</h2>
            <ol>
                <li>Instrumenty muzyczne</li>
                <li>Sprzęt audio</li>
                <li>Płyty CD</li>
            </ol>
        </section>
        <section id="prawy">
            <?php
                if(isset($_POST["guzik"])){
                    $im = $_POST["imie"];
                    $naz = $_POST["nazw"];
                    $adr = $_POST["adres"];
                    $tele = $_POST["tel"];

                    $login = $_POST["log"];
                    $pass = $_POST["pass"];

                    $conn = mysqli_connect("localhost","root","","sklep");
                    $kwe1 = "INSERT INTO uzytkownicy VALUES (NULL,'{$im}','{$naz}','{$adr}','{$tele}');";
                    $kwe2 = "INSERT INTO konta VALUES (NULL,'{$login}','{$pass}');";

                    mysqli_query($conn, $kwe1);
                    mysqli_query($conn, $kwe2);


                    echo "Konto {$im} {$naz} zostało zajerestrowane w sklepie muzycznym";

                    mysqli_close($conn);
                }
 
            ?>
        </section>

    </body>
</html>