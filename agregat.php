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
    <h5>Funkcje agregujące</h5>
 <?php


    require("connect.php");
    $sql='SELECT sum(zarobki) as sz FROM pracownicy';
    echo("<h2>ZADANIE 1: $sql</h2>");
    $result = $conn->query($sql); 
        echo("<table border=1>");
        echo("<th>Suma_Zarobków</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["sz"]."</td>");
                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
        require("connect.php");
        $sql='SELECT sum(zarobki) as sz FROM pracownicy WHERE imie like "%a"';
        echo("<h2>ZADANIE 2: $sql</h2>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Suma_Zarobków</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["sz"]."</td>");
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");
        require("connect.php");
        $sql='SELECT sum(zarobki) as sz FROM pracownicy WHERE (imie not like "a%") AND (dzial=2 OR dzial=3)';
        echo("<h2>ZADANIE 3: $sql</h2>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Suma_zarobków</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["sz"]."</td>");
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");
        require("connect.php");
        $sql='SELECT avg(zarobki) as az FROM pracownicy where imie not like "%a"';
        echo("<h2>ZADANIE 4: $sql</h2>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Średnia_zarobków</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["az"]."</td>");
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");
        require("connect.php");
        $sql='SELECT avg(zarobki) as az FROM pracownicy WHERE dzial=4';
        echo("<h2>ZADANIE 5: $sql</h2>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Średnia_zarobków</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["az"]."</td>");
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");
            require("connect.php");
            $sql='SELECT avg(zarobki) as az FROM pracownicy WHERE (imie not like "%a") AND (dzial=1 OR dzial=2)';
            echo("<h2>ZADANIE 6: $sql</h2>");
            $result = $conn->query($sql); 
                echo("<table border=1>");
                echo("<th>Średnia_zarobków</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                            echo("<td>".$row["az"]."</td>");
                        echo("</tr>");
                    }
        
                echo("</table>");
                require("connect.php");
                $sql='SELECT count(imie) as ip FROM pracownicy';
                echo("<h2>ZADANIE 7: $sql</h2>");
                $result = $conn->query($sql); 
                echo("<table border=1>");
                echo("<th>Ilość_pracowników</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                            echo("<td>".$row["ip"]."</td>");
                        echo("</tr>");
                    }

                echo("</table>");
                require("connect.php");
                $sql='SELECT count(imie) as ip FROM pracownicy where (imie like "%a") AND (dzial=1 OR dzial=3)';
                echo("<h2>ZADANIE 8: $sql</h2>");
                $result = $conn->query($sql); 
                echo("<table border=1>");
                echo("<th>Ilość_pracowników</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                            echo("<td>".$row["ip"]."</td>");
                        echo("</tr>");
                    }

                echo("</table>");
                require("connect.php");
                $sql='SELECT nazwa_dzial, sum(zarobki) as sz FROM pracownicy, organizacja WHERE dzial=id_org group by dzial';
                echo("<h2>ZADANIE 9: $sql</h2>");
                $result = $conn->query($sql); 
                echo("<table border=1>");
                echo("<th>Nazwa_działu</th>");
                echo("<th>Suma_zarobków</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["sz"]."</td>"); 
                        echo("</tr>");
                    }

                echo("</table>");    
                require("connect.php");
                $sql='SELECT count(imie) as ip, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial';
                echo("<h2>ZADANIE 10: $sql</h2>");
                $result = $conn->query($sql); 
                echo("<table border=1>");
                echo("<th>Nazwa_działu</th>");
                echo("<th>Ilość_pracowników</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["ip"]."</td>"); 
                        echo("</tr>");
                    }

                echo("</table>");    
                require("connect.php");
                $sql='SELECT avg(zarobki) as az, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial';
                echo("<h2>ZADANIE 11: $sql</h2>");
                $result = $conn->query($sql); 
                echo("<table border=1>");
                echo("<th>Nazwa_działu</th>");
                echo("<th>Średnia_zarobków</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["az"]."</td>"); 
                        echo("</tr>");
                    }

                echo("</table>");    
                require("connect.php");
                $sql='SELECT sum(zarobki) as sum, if(imie like "%a", "Kobiety", "Mężczyźni") as plec FROM pracownicy group by plec';
                echo("<h2>ZADANIE 12: $sql</h2>");
                $result = $conn->query($sql); 
                echo("<table border=1>");
                echo("<th>Suma_zarobków</th>");
                echo("<th>Płeć</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["sum"]."</td><td>".$row["plec"]."</td>"); 
                        echo("</tr>");
                    }

                echo("</table>");   
                require("connect.php");
                $sql='SELECT avg(zarobki) as az, if(imie like "%a", "Kobiety", "Mężczyźni") as plec FROM pracownicy group by plec';
                echo("<h2>ZADANIE 13: $sql</h2>");
                $result = $conn->query($sql); 
                echo("<table border=1>");
                echo("<th>Średnia_zarobków</th>");
                echo("<th>Płeć</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["az"]."</td><td>".$row["plec"]."</td>"); 
                        echo("</tr>");
                    }

                echo("</table>");   
                require("connect.php");
                $sql='SELECT sum(zarobki) as sum, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial HAVING sum(zarobki)<28';
                echo("<h2>ZADANIE 14: $sql</h2>");
                $result = $conn->query($sql);
                echo("<table border=1>");
                echo("<th>Nazwa_działu</th>");
                echo("<th>Suma_zarobków</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["sum"]."</td>");
                    }

                echo("</table>");
                require("connect.php");
                $sql='SELECT avg(zarobki) as az, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie not like "%a") group by dzial having avg(zarobki)>30';
                echo("<h2>ZADANIE 15: $sql</h2>");
                $result = $conn->query($sql);
                echo("<table border=1>");
                echo("<th>Nazwa_działu</th>");
                echo("<th>Średnia_zarobków</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["az"]."</td>");
                    }

                echo("</table>");
                require("connect.php");
                $sql='SELECT count(imie) as i, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) group by dzial having count(imie)>2';
                echo("<h2>ZADANIE 16: $sql</h2>");
                $result = $conn->query($sql);
                echo("<table border=1>");
                echo("<th>Ilość</th>");
                echo("<th>Nazwa_działu</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row["i"]."</td><td>".$row["nazwa_dzial"]."</td>");
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
                  </div>
                </div>
                
                  <p>
                  <div class="obrazek">    
                  <img src="https://i.pinimg.com/originals/57/98/5b/57985bf3c5bf34f9c6c41aeb849d3a5b.jpg"></p>
                </div>
                </div>
                
                </body>
                </html>