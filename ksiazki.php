<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Karolina Zatylny 2Ti</title>
        <link rel="stylesheet" href="styles.css">
    </head>
<body>
<div class="nav"
<h3>
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-karolinazatylny"><b>GITHUB | </b></a>
    <a href="index.php"><b>STRONA GŁÓWNA | </b></a>
    <a href="agregat.php"><b>FUNKCJE AGREGUJĄCE | </b></a>
    <a href="orgpracownicy.php"><b>ORGANIZACJA I PRACOWNICY | </b></a>
    <a href="pracownicy.php"><b>PRACOWNICY | </b></a>
    <a href="dataiczas.php"><b>DATA I CZAS | </b></a> 
    <a href="formularz.html"><b>FORMULARZ | </b></a>
    <a href="danedobazy.php">DANE DO BAZY | </b></a>
    <a href="ksiazki.php">KSIĄŻKI</b></a>
</h3>
</div>

<h1>✿ Karolina Zatylny ✿</h1>
<hr>

<?php
  
 require_once('connect.php');
$sql = 'SELECT * FROM biblAutor, biblTytul, biblAutor_biblTytul WHERE biblAutor_id=biblAutor.id and biblTytul_id=biblTytul.id';
echo("<h2>".$sql."</h2>");

 $result = $conn->query($sql);
         echo("<table border=1>");
        echo("<th>Id</th>");
        echo("<th>Autor</th>");
        echo("<th>Tytuł</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
  
   require_once('connect.php');
$sql = 'SELECT * FROM biblAutor';
echo("<h2>".$sql."</h2>");

 $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Id</th>");
        echo("<th>Autorzy</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

  
$sql = 'SELECT * FROM biblTytul';
echo("<h2>".$sql."</h2>");

 $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Id</th>");
        echo("<th>Tytuł</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["tytul"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

?>