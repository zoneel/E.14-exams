<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <title>Sklep</title>
        <link rel="stylesheet" href="styl.css" />

    </head>
    <body>
        <section id="baner">
            <h1>Ozdoby - Sklep</h1>
        </section>
        <section id="lewy">
            <h2>OZDOBY</h2>
            <a href="galeria.html">Galeria</a><br />
            <a href="zamowienie.php">Zamowienie</a>
        </section>
        <section id="srodkowy">
            <p>Dodaj uzytkownika</p>

            <form method="POST" action="zamowienie.php">
                Imie: <input type="text" name="imie" /><br />
                Nazwisko: <input type="text" name="nazwisko" /><br />
                e-mail: <input type="email" name="email" /><br />
                <input type="submit" name="guzior" />
            </form>

            <?php
            if(isset($_POST['guzior'])){
                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $email = $_POST['email'];

                $conn = mysqli_connect("localhost", "root", "", "sklep");
                $kwer = "INSERT INTO zamowienia (`imie`,`nazwisko`,`adres_email`) VALUES ('{$imie}','{$nazwisko}','{$email}');";
                $zap = mysqli_query($conn, $kwer);
                $zap;
                if(!$zap){
                    echo "nie udalo sie";
                }else{
                    echo "udalo sie";
                }
                mysqli_close($conn);
            }
               
        ?>
        </section>

        <section id="prawy">
            <img src="animacja.gif" />
        </section>
        <section id="stopka">
            <h3>Autor strony: zonel</h3>
        </section>


    </body>
</html>