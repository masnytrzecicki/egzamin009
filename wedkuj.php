<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl_1.css">
    <title>Wędkuj</title>
</head>
<body>

<div class="baner">
    <h1>Portal dla wędkarzy</h1>
</div>

<div class="lewy">
    <h2>Ryby drapieżne naszych wód</h2>
    <ul>
        <?php

        $db = new mysqli('localhost',
            'root',
            '',
            'wedkowanie');
         $sql = "SELECT nazwa, wystepowanie FROM ryby where styl_zycia = 1";
          $wynik = $db->query($sql);
           while($wiersz = $wynik->fetch_assoc()) {
               $nazwa = $wiersz['nazwa'];
               $wystepowanie = $wiersz['wystepowanie'];
               echo "<li>$nazwa, wystepowanie: $wystepowanie</li>";
           }
        $db->close();


        ?>
    </ul>
</div>

<div class="prawy">
    <img src="ryba1.jpg" alt="Sum">
    <br>
    <a href="kwerendy.txt">Pobierz kwerendy</a>
</div>

<div class="stopka">
    <p>Stronę wykonał: 01234567890</p>
</div>

</body>
</html>