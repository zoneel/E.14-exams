<!DOCTYPE html><html>
    <head>
        <meta charset="utf-8" />
        <title>Biblioteka miejska</title>
        <link rel="stylesheet" href="styl.css" />
    </head>
    <body>
        <section id="baner">
            <h2>Miejska Biblioteka Publiczna w Książkowicach</h2>
        </section>

        <section id="lewy">
            <h3>W naszych zbiorach znajdziesz dzieła następujących autorów:</h3>
            <ul>
                <?php 
                    $conn = mysqli_connect("localhost","root","","biblioteka");
                    $kwe = "SELECT imie, nazwisko FROM autorzy;";
                    $que = mysqli_query($conn, $kwe);

                    while($row=mysqli_fetch_row($que)){
                        echo "<li>{$row[0]} {$row[1]}</li>";
                    }
                    mysqli_close($conn);
                ?>
            </ul>
        </section>
        <section id="srodek">
            <h3>Dodaj nowego czytelnika</h3>
            <form method="POST" action="biblioteka.php">
                imię: <input type="text" name="imie" /><br />
                nazwisko: <input type="text" name="nazwisko" /><br />
                rok urodzenia: <input type="text" name="rok" /><br />
                <input type="submit" value="DODAJ" name="btn" />
            </form>
            <?php 
                    if(isset($_POST["btn"])){
                        $imie = $_POST["imie"];
                        $nazw = $_POST["nazwisko"];
                        $rok = $_POST["rok"];

                        $kod = substr($imie, 0, 2).substr($nazw, 0, 2).substr($rok, 2);


                        $conn = mysqli_connect("localhost","root","","biblioteka");
                        $kwe = "INSERT INTO czytelnicy VALUES (NULL,'{$imie}','{$nazw}','{$kod}');";
                        $que = mysqli_query($conn, $kwe);
    
                        if($que){
                            echo "Czytelnik: {$imie} {$nazw} został dodany do bazy danych";
                        }

                        mysqli_close($conn);
                    }
                ?>
        </section>
        <section id="prawy">
            <img src="biblioteka.png" alt="książki" />
            <h4>ul. Czytelnicza 25<br /> 12-120 Książkowice<br /> tel.: 123123123 <br />email: <a href="mailto:biuro@biblioteka.pl">biuro@biblioteka.pl</a></h4>
        </section>

        <section id="stopka">
            <p>Projekt strony: zonel</p>
        </section>

    </body>
</html>