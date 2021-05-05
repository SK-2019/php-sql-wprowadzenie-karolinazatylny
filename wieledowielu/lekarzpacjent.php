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
    <h5>Lekarz - pacjent</h5>
 <?php
   require("../assets/connect.php");
   $sql='SELECT * FROM lekarz';
   echo("<h2>PRZYKŁAD 1: $sql</h2>");
   $result = $conn->query($sql);
       echo("<table border=1>");
       echo("<th>ID</th>");
       echo("<th>Imie</th>");
       echo("<th>Nazwisko</th>");
           while($row=$result->fetch_assoc()){ 
               echo("<tr>");
               echo("<td>" .$row["id_lekarz"]. "</td><td>" .$row["imie_l"]. "</td><td>" .$row["nazwisko_l"]. "</td>");
               echo("<td><form action='delete3lp.php' method=POST>");
               echo("<input type name='id' value='".$row['id_lekarz']."'hidden>");
               echo("<input type='submit' value='Usuń'>");
              echo("</form></td>");  
               echo("</tr>");
           }
       echo("</table>");

       require("../assets/connect.php");
       $sql='SELECT * FROM pacjent';
       echo("<h2>PRZYKŁAD 2: $sql</h2>");
       $result = $conn->query($sql);
                echo("<table border=1>");
                echo("<th>ID</th>");
                echo("<th>Imie</th>");
                echo("<th>Nazwisko</th>");
               while($row=$result->fetch_assoc()){ 
                   echo("<tr>");
                   echo("<td>" .$row["id_pacjent"]. "</td><td>" .$row["imie_p"]. "</td><td>" .$row["nazwisko_p"]. "</td>");
                   echo("<td><form action='delete2lp.php' method=POST>");
                   echo("<input type name='id' value='".$row['id_pacjent']."'hidden>");
                   echo("<input type='submit' value='Usuń'>");
                  echo("</form></td>");    
                        echo("</tr>");
            }            
        echo("</table>");
     
        require("../assets/connect.php");
        $sql='SELECT *, lekarz_pacjent.id as lpid FROM lekarz, pacjent, lekarz_pacjent WHERE id_lekarz=lekarzID AND id_pacjent=pacjentID';
        echo("<h2>PRZYKŁAD 3: $sql</h2>");
        $result = $conn->query($sql);
            echo("<table border=1>");
            echo("<th>ID lekarza</th>");
            echo("<th>Imie lekarza</th>");
            echo("<th>Nazwisko lekarza</th>");
            echo("<th>ID pacjenta</th>");
            echo("<th>Imie pacjenta</th>");
            echo("<th>Nazwisko pacjenta</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["id_lekarz"]."</td><td>" .$row["imie_l"]."</td><td>".$row["nazwisko_l"]."</td><td>".$row["id_pacjent"]."</td><td>".$row["imie_p"]."</td><td>".$row["nazwisko_p"]."</td>");
                    echo("<td><form action='delete1lp.php' method=POST>");
                    echo("<input type name='id' value='".$row['lpid']."'hidden>");
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