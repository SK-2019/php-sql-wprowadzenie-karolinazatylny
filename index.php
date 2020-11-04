<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Karolina Zatylny 2Ti</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>

<h1>Karolina Zatylny</h1>

<?php

    require("connect.php");
    echo("<h2>ZADANIE 1: SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie not like %a</h2>");
    $result = $conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie not like "%a"');
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
    require("connect.php");
    echo("<h2>ZADANIE 2: SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org</h2>");  
    $result = $conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org'); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>");  

                echo("</tr>");
            }

        echo("</table>");
    require("connect.php");
    echo("<h2>ZADANIE 3: SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and (dzial=2 or dzial=1)</h2>");  
    $result = $conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and (dzial=2 or dzial=1)'); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    require("connect.php");
    echo("<h2>ZADANIE 4: SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and dzial = 3</h2>");  
    $result = $conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and dzial = 3');
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    require("connect.php");
    echo("<h2>ZADANIE 5: SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and zarobki>=35</h2>");  
    $result = $conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and zarobki>=35'); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
?>
    
</body>
</html>

