<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Filmoteka</title>
    <link rel="stylesheet" href="styl3.css"/>
</head>
<body>
    <section id="pierwszy">
        <img src="klaps.png" alt="Nasze filmy"/>
    </section>
    <section id="drugi">
        <h1>BAZA FILMÓW</h1>
    </section>
    <section id="trzeci">
        <form method="POST" action="">
            <select name="wybor">
                <option value="1">Sci-Fi</option>
                <option value="2">Animacja</option>
                <option value="3">Dramat</option>
                <option value="4">Horror</option>
                <option value="5">Komedia</option>
            </select>
            <input type="submit" name="guzior" value="Filmy"/>
        </form>
    </section>
    <section id="czwarty">
        <img src="gwiezdneWojny.jpg" alt="szturmowcy"/>
    </section>

    <section id="lewo">
        <h2>Wybrano filmy:</h2>
        <?php
            if (isset($_POST['guzior'])){
                $wybor = $_POST['wybor'];

                $conn = mysqli_connect("localhost","root","","dane");
                $kwe = "SELECT tytul, rok, ocena FROM `filmy` WHERE gatunki_id = '{$wybor}';";
                $zap = mysqli_query($conn, $kwe);

                while($film=mysqli_fetch_row($zap)){
                    echo "Tytuł: ".$film[0];
                    echo ", Rok produkcji: ".$film[1];
                    echo ", Ocena: ".$film[2]."<br/>";
                }
            }
        ?>
    </section>
    <section id="prawo">
        <h2>Wszystkie filmy:</h2>
        <?php
            $conn = mysqli_connect("localhost","root","","dane");
            $kwe = "SELECT filmy.id, filmy.tytul, rezyserzy.imie, rezyserzy.nazwisko FROM filmy JOIN rezyserzy WHERE filmy.rezyserzy_id = rezyserzy.id;";
            $zap = mysqli_query($conn, $kwe);

            while($film=mysqli_fetch_row($zap)){
                echo $film[0].". ".$film[1].", reżyseria: ".$film[2]." ".$film[3]."<br>";
            }
            
        ?>
    </section>

    <section id="stopka">
        <p>Autor: zonel</p>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
        <a href="http://filmy.pl" target=_blank>Przejdz do filmy.pl</a>

    </section>


</body>

</html>