<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Coda+Caption:wght@800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>K a r o l i n a   ★   Z a t y l n y</h1>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
    <h6>
    <li><a class="link" href="https://github.com/SK-2019/php-sql-wprowadzenie-karolinazatylny"><b>GITHUB</b></a></li>
    <li><a class="link" href="index.php"><b>STRONA GŁÓWNA</b></a></li>
    <li><a class="link" href="zadania.php"><b>ZADANIA</b></a></li>
    <li><a class="link" href="agregat.php"><b>FUNKCJE AGREGUJĄCE</b></a></li>
    <li><a class="link" href="orgpracownicy.php"><b>ORGANIZACJA I PRACOWNICY</b></a></li>
    <li><a class="link" href="pracownicy.php"><b>PRACOWNICY</b></a></li>
    <li><a class="link" href="dataiczas.php"><b>DATA I CZAS</b></a></li>
    <li><a class="link" href="formularz.html"><b>FORMULARZ</b></a></li>
    <li><a class="link" href="danedobazy.php"><b>DANE DO BAZY</b></a></li>
    <li><a class="link" href="ksiazki.php"><b>KSIĄŻKI</b></a></li>
    </h6>
    </ul>
  </div>

  <div class="col-6 col-s-9">
    <h5>Organizacja i pracownicy</h5>
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
            <hr>
              </div>
            
              <div class="col-3 col-s-12">
              <img src="https://i.pinimg.com/originals/21/a7/09/21a709084d7132848f730e245d41c584.jpg">
              <img src="https://i.pinimg.com/originals/cb/01/ad/cb01add37be89cbf3b7569a8114d1c0e.jpg">
              <img src="https://i.pinimg.com/originals/ad/14/dc/ad14dc698af234bfa7a67734ab70a2c7.jpg">
              <img src="https://i.pinimg.com/originals/f5/18/13/f5181303b2ff4fdd8d7bebd8cb975283.jpg">
              <img src="https://i.pinimg.com/originals/f0/34/68/f03468adab5d7012bebb14e3e8ac26c6.jpg">
              </div>
            </div>
            
              <p>
              <div class="obrazek">    
              <img src="https://i.pinimg.com/originals/57/98/5b/57985bf3c5bf34f9c6c41aeb849d3a5b.jpg"></p>
            </div>
            </div>
            
            </body>
            </html>