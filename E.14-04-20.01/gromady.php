<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Gromady kręgowców</title>
    <link rel="stylesheet" href="style14.css"/>
</head>
<body>
    <section id="menu">
        
            <a href="gromada-ryby.html">gromada ryb</a>
            <a href="gromada-ptaki.html">gromada ptaków</a>
            <a href="gromada-ssaki.html">gromada ssaków</a>


    </section>
    <section id="logo">
        <h2>GROMADY KRĘGOWCÓW</h2>
    </section>

    <section id="lewy">
        <?php 
            $conn = mysqli_connect("localhost", "root", "", "baza");
            $kwe = 'SELECT id, Gromady_id, gatunek, wystepowanie FROM zwierzeta WHERE gromady_id = "4" OR gromady_id = "5";';
            $que = mysqli_query($conn, $kwe);

            while($row=mysqli_fetch_row($que)){
                if($row[1] == 5){
                    echo "<p>{$row[0]}. {$row[2]}</p><br/>";
                    echo "<p>Wystepowanie: {$row[3]}, gromada ssaki</p>";
                    echo "<hr>";
                }else{
                    echo "<p>{$row[0]}. {$row[2]}</p><br/>";
                    echo "<p>Wystepowanie: {$row[3]}, gromada ptaki</p><br/>";
                    echo "<hr>";
                }

            }
            mysqli_close($conn);
        ?>
    </section>
    <section id="prawy">
        <h1>PTAKI</h1>
        <ol>
        <?php 
            $conn = mysqli_connect("localhost", "root", "", "baza");
            $kwe = 'SELECT gatunek, obraz FROM zwierzeta where gromady_id = "4";';
            $que = mysqli_query($conn, $kwe);

            while($row=mysqli_fetch_row($que)){
                echo '<li>';
                echo '<a href="'.$row[1].'">'.$row[0].'</a>';
                echo '</li>';
            }
            mysqli_close($conn);
        ?>
        </ol>
        <img src="sroka.jpg" alt="Sroka zwyczajna, gromada ptaki"/>
    </section>

    <section id="stopka">Stronę o kręgowcach przygotował: zonel</section>

</body>
</html>