<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Nasz sklep komputerowy</title>
    <link rel="stylesheet" href="styl8.css"/>
</head>
<body>
    <section id="menu">
        <a href="index.php">Główna</a>
        <a href="procesory.html">Procesory</a>
        <a href="ram.html">RAM</a>
        <a href="grafika.html">Grafika</a>
    </section>

    <section id="logo">
        <h2>Podzespoly komputerowe</h2>
    </section>

    <section id="glowny">
        <h1>Dzisiejsze promocje</h1>
        <table>
            <tr>
                <th>NUMER</th>
                <th>NAZWA PODZESPOŁU</th>
                <th>OPIS</th>
                <th>CENA</th>
            </tr>

            <?php 
                $conn = mysqli_connect("localhost","root","","sklep");
                $zap = "SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena < 1000;";
                $kwe = mysqli_query($conn, $zap);

                while($row=mysqli_fetch_row($kwe)){
                    echo "<tr>";
                    echo "<td>$row[0]</td>";
                    echo "<td>$row[1]</td>";
                    echo "<td>$row[2]</td>";
                    echo "<td>$row[3]</td>";
                    echo "</tr>";
                }
                mysqli_close($conn);
            ?>
        </table>
    </section>

    <section id="stopka1">
        <img src="scalak.jpg" alt="promocje na procesory"/>
    </section>
    <section id="stopka2">
        <h4>Nasz sklep komputerowy</h4>
        <p>Współpracujemy z hurtownią <a href="http://www.edata.pl/" target=_blank>edata</a></p>
    </section>
    <section id="stopka3"><p>zadzwon: 601 602 603</p></section>
    <section id="stopka4"><p>Strone wykonał: zonel</p></section>
</body>
</html>