!DOCTYPE html>
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
   $sql='SELECT * FROM pracownik, projekt, pracownik_projekt WHERE id_pracownik=pracownikID AND id_projekt=projektID';
   echo("<h2>PRZYKŁAD 1: $sql</h2>");
   $result = $conn->query($sql);
       echo("<table border=1>");
       echo("<th>ID</th>");
       echo("<th>Imie</th>");
       echo("<th>Dział</th>");
       echo("<th>Projekt</th>");
           while($row=$result->fetch_assoc()){ 
               echo("<tr>");
               echo("<td>" .$row["id_pracownik"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial_id"]. "</td><td>" .$row["nazwa"]. "</td>");

               echo("</tr>");
           }
       echo("</table>");

       require("../assets/connect.php");
       $sql='SELECT * FROM pracownik';
       echo("<h2>PRZYKŁAD 2: $sql</h2>");
       $result = $conn->query($sql);
           echo("<table border=1>");
           echo("<th>ID</th>");
           echo("<th>Imie</th>");
           echo("<th>Dział</th>");
           echo("<th>Zarobki</th>");
           echo("<th>Data_urodzenia</th>");
               while($row=$result->fetch_assoc()){ 
                   echo("<tr>");
                   echo("<td>" .$row["id_pracownik"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial_id"]. "</td><td>" .$row["wynagrodzenie"]. "</td><td>" .$row["dataUrodzenia"]. "</td>");
                        echo("</tr>");
            }            
        echo("</table>");
     
        require("../assets/connect.php");
        $sql='SELECT * FROM projekt';
        echo("<h2>PRZYKŁAD 2: $sql</h2>");
        $result = $conn->query($sql);
            echo("<table border=1>");
            echo("<th>ID</th>");
            echo("<th>Nazwa</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>" .$row["id_projekt"]. "</td><td>" .$row["nazwa"]. "</td>");
                         echo("</tr>");
             }            
         echo("</table>");

?> 