<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Karolina Zatylny 2Ti</title>
        <link rel="stylesheet" href="styles.css">
    </head>
<body>

<<h3>
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-karolinazatylny"><b>GITHUB | </b></a>
    <a href="agregat.php"><b>FUNKCJE AGREGUJĄCE | </b></a>
    <a href="orgpracownicy.php"><b>ORGANIZACJA I PRACOWNICY | </b></a>
    <a href="pracownicy.php"><b>PRACOWNICY | </b></a>
    <a href="dataiczas.php"><b>DATA I CZAS | </b></a> 
    <a href="formularz.html"><b>FORMULARZ | </b></a>
    <a href="danedobazy.html">DANE DO BAZY</b></a>
</h3>
<h1>✿ Karolina Zatylny ✿</h1>
<hr>

<?php

    require("connect.php");
    $sql='SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org';
    echo("<h2>ZADANIE 1: $sql</h2>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
    require("connect.php");
    $sql='SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) AND (dzial=1 or dzial=4)';
    echo("<h2>ZADANIE 2: $sql</h2>");  
    $result = $conn->query($sql); 
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
    $sql='SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) and (imie like "%a")';
    echo("<h2>ZADANIE 3: $sql</h2>");  
    $result = $conn->query($sql); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    require("connect.php");
    $sql='SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) AND (imie not like "%a")';
    echo("<h2>ZADANIE 4: $sql</h2>");  
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                
                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    require("connect.php");
    $sql='SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) order by imie desc';
    echo("<h2>ZADANIE 5: $sql</h2>");  
    $result = $conn->query($sql); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                  echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    require("connect.php");
    $sql='SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) AND (dzial=3) order by imie asc';
    echo("<h2>ZADANIE 6: $sql</h2>");
    $result = $conn->query($sql); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                 echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
        require("connect.php");
        $sql='SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie like "%a") order by imie asc';
        echo("<h2>ZADANIE 7: $sql</h2>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");
        require("connect.php");
        $sql='SELECT imie, zarobki, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) AND (imie like "%a") AND (dzial=1 OR dzial=3) order by zarobki asc';
        echo("<h2>ZADANIE 8: $sql</h2>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");
        require("connect.php");
        $sql='SELECT imie, zarobki, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) AND (imie not like "a%") order by nazwa_dzial asc, zarobki asc';
        echo("<h2>ZADANIE 9: $sql</h2>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");
            require("connect.php");
            $sql='SELECT * FROM pracownicy, organizacja WHERE dzial=id_org AND dzial=4 order by zarobki desc limit 2';
        echo("<h2>ZADANIE 10: $sql</h2>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Id</th>");
            echo("<th>Imie</th>");
            echo("<th>Dział</th>");
            echo("<th>Nazwa_działu</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_urodzenia</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");
            require("connect.php");
            $sql='SELECT * FROM pracownicy, organizacja WHERE dzial=id_org AND (dzial=4 or dzial=2) order by zarobki desc limit 3';
        echo("<h2>ZADANIE 11: $sql</h2>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Id</th>");
            echo("<th>Imie</th>");
            echo("<th>Dział</th>");
            echo("<th>Nazwa_działu</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_urodzenia</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");
            require("connect.php");
            $sql='SELECT * FROM pracownicy, organizacja WHERE dzial=id_org order by data_urodzenia asc limit 1';
        echo("<h2>ZADANIE 12: $sql</h2>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Id</th>");
            echo("<th>Imie</th>");
            echo("<th>Dział</th>");
            echo("<th>Nazwa_działu</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_urodzenia</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");

?>
    
</body>
</html>
