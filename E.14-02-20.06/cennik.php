<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styl.css" />
        <title>Pokoje</title>
    </head>
    <body>
        <section id="baner1">
            <h2>WYNAJEM POKOI</h2>
        </section>

        <section id="menu1">
            <a href="index.html">POKOJE</a>
        </section>
        <section id="menu2">
            <a href="cennik.php">CENNIK</a>
        </section>
        <section id="menu3">
            <a href="kalkulator.html">KALKULATOR</a>
        </section>

        <section id="baner2"></section>

        <section id="lewy">
        </section>
        <section id="srodkowy">
            <h1> Cennik </h1>
            <table>
            <?php 
                $conn = mysqli_connect("localhost","root","","wynajem");
                $kwe = "SELECT * FROM pokoje";
                $zap = mysqli_query($conn, $kwe);

                while($row=mysqli_fetch_row($zap)){
                    echo "<tr>";
                    echo "<td>{$row[0]}</td>";
                    echo "<td>{$row[1]}</td>";
                    echo "<td>{$row[2]}</td>";

                    echo "</tr>";
                }

                mysqli_close($conn);
            ?>
            </table>
        </section>
        <section id="prawy">
        </section>


        <section id="stopka">
            <p>Strone opracował: zonel</p>
        </section>

    </body>
</html>