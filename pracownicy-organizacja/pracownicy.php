<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Coda+Caption:wght@800&display=swap" rel="stylesheet">
<title>Karolina Zatylny 2Ti gr.1</title>
<link rel="stylesheet" href="/assets/style.css">
<link rel="icon" href="https://findicons.com/files/icons/725/colobrush/256/pink_heart.png">
</head>
<body>

<?php
      include("../assets/header.php");
      include("../assets/menu.php");
      ?>

  <div class="col-6 col-s-9">
    <h5>Pracownicy</h5>
 <?php

    require("../assets/connect.php");
    $sql='SELECT * FROM pracownicy, organizacja WHERE dzial=2 AND dzial=id_org';
    echo("<h2>ZADANIE 1: $sql</h2>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                echo("</tr>");
            }

        echo("</table>");
    require("../assets/connect.php");
    $sql='SELECT * FROM pracownicy, organizacja where dzial=id_org AND (dzial=1 or dzial=2)';
    echo("<h2>ZADANIE 2: $sql</h2>");  
    $result = $conn->query($sql); 
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                echo("</tr>");
            }
    

        echo("</table>");
    require("../assets/connect.php");
    $sql='SELECT * FROM pracownicy, organizacja WHERE zarobki<30 AND dzial=id_org';
    echo("<h2>ZADANIE 3: $sql</h2>");  
    $result = $conn->query($sql); 
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                echo("</tr>");
            }

            echo("</table>")

?>
  </div>

  <div class="col-3 col-s-12">
  <h2><iframe src="https://open.spotify.com/embed/album/75eP8LZolyNBpqIRyB5pvB" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe></h2>
  <img src="https://i.pinimg.com/originals/4c/75/20/4c75209a730e0786f6410483e0d45cd7.jpg">
  </div>

</body>
</html>