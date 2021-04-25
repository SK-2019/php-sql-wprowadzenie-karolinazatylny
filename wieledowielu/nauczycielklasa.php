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
    <h5>Pracownik - projekt</h5>
 <?php
   require("../assets/connect.php");
   $sql='SELECT * FROM nauczyciel';
   echo("<h2>PRZYKŁAD 1: $sql</h2>");
   $result = $conn->query($sql);
       echo("<table border=1>");
       echo("<th>ID</th>");
       echo("<th>Imie</th>");
       echo("<th>Nazwisko</th>");
           while($row=$result->fetch_assoc()){ 
               echo("<tr>");
               echo("<td>" .$row["id_nauczyciel"]. "</td><td>" .$row["imie_n"]. "</td><td>" .$row["nazwisko_n"]. "</td>");

               echo("</tr>");
           }
       echo("</table>");

       require("../assets/connect.php");
       $sql='SELECT * FROM klasa';
       echo("<h2>PRZYKŁAD 2: $sql</h2>");
       $result = $conn->query($sql);
                echo("<table border=1>");
                echo("<th>ID</th>");
                echo("<th>Nazwa klasy</th>");
                echo("<th>Liczba uczniów</th>");
               while($row=$result->fetch_assoc()){ 
                   echo("<tr>");
                   echo("<td>" .$row["id_klasa"]. "</td><td>" .$row["nazwa_klasy"]. "</td><td>" .$row["liczba_uczniów"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     
        require("../assets/connect.php");
        $sql='SELECT * FROM nauczyciel, klasa, nauczyciel_klasa WHERE id_nauczyciel=nauczycielID AND id_klasa=klasaID';
        echo("<h2>PRZYKŁAD 3: $sql</h2>");
        $result = $conn->query($sql);
            echo("<table border=1>");
            echo("<th>ID nauczyciela</th>");
            echo("<th>Imie nauczyciela</th>");
            echo("<th>Nazwisko nauczyciela</th>");
            echo("<th>ID klasy</th>");
            echo("<th>Nazwa klasy</th>");
            echo("<th>Liczba uczniów</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["id_nauczyciel"]."</td><td>" .$row["imie_n"]."</td><td>".$row["nazwisko_n"]."</td><td>".$row["id_klasa"]."</td><td>".$row["nazwa_klasy"]."</td><td>".$row["liczba_uczniów"]."</td>");
                         echo("</tr>");
             }            
         echo("</table>");

?>
</div>

<div class="col-3 col-s-12">
<h2><iframe src="https://open.spotify.com/embed/album/75eP8LZolyNBpqIRyB5pvB" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe></h2>
<img src="https://i.pinimg.com/originals/4c/75/20/4c75209a730e0786f6410483e0d45cd7.jpg">
</div>