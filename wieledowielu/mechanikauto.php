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
    <h5>Mechanik - auto</h5>
 <?php
   require("../assets/connect.php");
   $sql='SELECT * FROM mechanik';
   echo("<h2>PRZYKŁAD 1: $sql</h2>");
   $result = $conn->query($sql);
       echo("<table border=1>");
       echo("<th>ID</th>");
       echo("<th>Imie</th>");
       echo("<th>Nazwisko</th>");
           while($row=$result->fetch_assoc()){ 
               echo("<tr>");
               echo("<td>" .$row["id_mechanik"]. "</td><td>" .$row["imie_m"]. "</td><td>" .$row["nazwisko_m"]. "</td>");
               echo("<td><form action='delete3ma.php' method=POST>");
               echo("<input type name='id' value='".$row['maid']."'hidden>");
               echo("<input type='submit' value='Usuń'>");
              echo("</form></td>");  
               echo("</tr>");
           }
       echo("</table>");

       require("../assets/connect.php");
       $sql='SELECT * FROM samochod';
       echo("<h2>PRZYKŁAD 2: $sql</h2>");
       $result = $conn->query($sql);
                echo("<table border=1>");
                echo("<th>ID</th>");
                echo("<th>Marka</th>");
                echo("<th>Rejestracja</th>");
               while($row=$result->fetch_assoc()){ 
                   echo("<tr>");
                   echo("<td>" .$row["id_samochod"]. "</td><td>" .$row["marka"]. "</td><td>" .$row["rejestracja"]. "</td>");
                   echo("<td><form action='delete2ma.php' method=POST>");
                   echo("<input type name='id' value='".$row['maid']."'hidden>");
                   echo("<input type='submit' value='Usuń'>");
                  echo("</form></td>");  
                        echo("</tr>");
            }            
        echo("</table>");
     
        require("../assets/connect.php");
        $sql='SELECT *, mechanik_samochod.id as maid FROM mechanik, samochod, mechanik_samochod WHERE id_mechanik=mechanikID AND id_samochod=samochodID';
        echo("<h2>PRZYKŁAD 3: $sql</h2>");
        $result = $conn->query($sql);
            echo("<table border=1>");
            echo("<th>ID mechanika</th>");
            echo("<th>Imie mechanika</th>");
            echo("<th>Nazwisko mechanika</th>");
            echo("<th>ID auta</th>");
            echo("<th>Marka auta</th>");
            echo("<th>Numer rejestracyjny</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["id_mechanik"]."</td><td>" .$row["imie_m"]."</td><td>".$row["nazwisko_m"]."</td><td>".$row["id_samochod"]."</td><td>".$row["marka"]."</td><td>".$row["rejestracja"]."</td>");
                    echo("<td><form action='delete1ma.php' method=POST>");
                    echo("<input type name='id' value='".$row['maid']."'hidden>");
                    echo("<input type='submit' value='Usuń'>");
                   echo("</form></td>");       
                    echo("</tr>");
             }            
         echo("</table>");

?>
</div>

<div class="col-3 col-s-12">
<h2><iframe src="https://open.spotify.com/embed/album/75eP8LZolyNBpqIRyB5pvB" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe></h2>
<img src="https://i.pinimg.com/originals/4c/75/20/4c75209a730e0786f6410483e0d45cd7.jpg">
</div>