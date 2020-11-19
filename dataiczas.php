<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Karolina Zatylny 2Ti</title>
        <link rel="stylesheet" href="styles.css">
    </head>
<body>

<h3>
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-karolinazatylny"><b>GITHUB | </b></a>
    <a href="agregat.php"><b>FUNKCJE AGREGUJĄCE | </b></a>
    <a href="orgpracownicy.php"><b>ORGANIZACJA I PRACOWNICY | </b></a>
    <a href="pracownicy.php"><b>PRACOWNICY | </b></a>
    <a href="dataiczas.php"><b>DATA I CZAS | </b></a> 
    <a href="formularz.html">FORMULARZ</a>
</h3>
<h1>✿ Karolina Zatylny ✿</h1>
<hr>

<?php
       require("connect.php");
       $sql='SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy, organizacja WHERE dzial=id_org';
       echo("<h2>ZADANIE 1: $sql</h2>");
       $result = $conn->query($sql);
           echo("<table border=1>");
           echo("<th>Id</th>");
           echo("<th>Imie</th>");
           echo("<th>Dział</th>");
           echo("<th>Nazwa_Działu</th>");
           echo("<th>Zarobki</th>");
           echo("<th>Data_urodzenia</th>");
           echo("<th>Wiek</th>");
               while($row=$result->fetch_assoc()){ 
                   echo("<tr>");
                   echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["wiek"]."</td>");                    echo("</tr>");
               }
   
           echo("</table>");
           require("connect.php");
           $sql='SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy, organizacja WHERE dzial=id_org AND nazwa_dzial="serwis"';
           echo("<h2>ZADANIE 2: $sql</h2>");
           $result = $conn->query($sql);
               echo("<table border=1>");
               echo("<th>Id</th>");
               echo("<th>Imie</th>");
               echo("<th>Dział</th>");
               echo("<th>Nazwa_Działu</th>");
               echo("<th>Zarobki</th>");
               echo("<th>Data_urodzenia</th>");
               echo("<th>Wiek</th>");
                   while($row=$result->fetch_assoc()){ 
                       echo("<tr>");
                       echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["wiek"]."</td>"); 
                       echo("</tr>");
                   }
       
            echo("</table>");
            require("connect.php");
            $sql='SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja WHERE dzial=id_org';
            echo("<h2>ZADANIE 3: $sql</h2>");
            $result = $conn->query($sql);
                echo("<table border>");
                echo("<th>Wiek_wszystkich_pracowników</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["wiek"]."</td>");                    
                        echo("</tr>");
                   }
           echo("</table>");
           require("connect.php");
           $sql='SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja WHERE dzial=id_org AND nazwa_dzial="handel"';
           echo("<h2>ZADANIE 4: $sql</h2>");
           $result = $conn->query($sql);
               echo("<table border>");
               echo("<th>Wiek_pracowników_handel</th>");
                   while($row=$result->fetch_assoc()){ 
                       echo("<tr>");
                       echo("<td>".$row["wiek"]."</td>");                    
                       echo("</tr>");
                  }
          echo("</table>");
          require("connect.php");
          $sql='SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy WHERE imie like "%a"';
          echo("<h2>ZADANIE 5: $sql</h2>");
          $result = $conn->query($sql);
              echo("<table border>");
              echo("<th>Wiek_kobiet</th>");
                  while($row=$result->fetch_assoc()){ 
                      echo("<tr>");
                      echo("<td>".$row["wiek"]."</td>");                    
                      echo("</tr>");
                 }
         echo("</table>");

          require("connect.php");
          $sql='SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy WHERE imie not like "%a"';
          echo("<h2>ZADANIE 6: $sql</h2>");
          $result = $conn->query($sql);
              echo("<table border>");
              echo("<th>Wiek_mężczyzn</th>");
                  while($row=$result->fetch_assoc()){ 
                      echo("<tr>");
                      echo("<td>".$row["wiek"]."</td>");                    
                      echo("</tr>");
                 }
         echo("</table>");

        require("connect.php");
        $sql='SELECT dzial, avg(YEAR(CURDATE()) - YEAR(data_urodzenia)) as a, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial';
          echo("<h2>ZADANIE 7: $sql</h2>");
          $result = $conn->query($sql);
              echo("<table border>");
              echo("<th>Wiek_mężczyzn</th>");
              echo("<th>Średnia_wiek</th>");
              echo("<th>Nazwa_działu</th>");
                  while($row=$result->fetch_assoc()){ 
                      echo("<tr>");
                      echo("<td>".$row["dzial"]."</td><td>".$row["a"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                      echo("</tr>");
                 }
         echo("</table>");

         require("connect.php");
         $sql='SELECT dzial, sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial';
           echo("<h2>ZADANIE 8: $sql</h2>");
           $result = $conn->query($sql);
               echo("<table border>");
               echo("<th>Dział</th>");
               echo("<th>Suma_wiek</th>");
               echo("<th>Nazwa_działu</th>");
                   while($row=$result->fetch_assoc()){ 
                       echo("<tr>");
                       echo("<td>".$row["dzial"]."</td><td>".$row["suma"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                       echo("</tr>");
                  }
          echo("</table>");

          require("connect.php");
         $sql='SELECT dzial, max(YEAR(CURDATE()) - YEAR(data_urodzenia)) as max, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial';
           echo("<h2>ZADANIE 9: $sql</h2>");
           $result = $conn->query($sql);
               echo("<table border>");
               echo("<th>Dział</th>");
               echo("<th>Wiek_najstarsi</th>");
               echo("<th>Nazwa_działu</th>");
                   while($row=$result->fetch_assoc()){ 
                       echo("<tr>");
                       echo("<td>".$row["dzial"]."</td><td>".$row["max"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                       echo("</tr>");
                  }
          echo("</table>");

          require("connect.php");
          $sql = ("SELECT MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) as min, nazwa_dzial from pracownicy, organizacja WHERE id_org=dzial and (nazwa_dzial='handel' OR nazwa_dzial='serwis') GROUP BY dzial");
          echo("<h2>ZADANIE 10: $sql</h2>");
          $result=$conn->query($sql);
          include("connect.php");
                  echo("<table border=1>");
                  echo("<th>Min</th>");
                  echo("<th>Nazwa_dział</th>");
                  while($row=$result->fetch_assoc()) {
                          echo("<tr>");
                              echo("<td>".$row["min"]."</td><td>".$row["nazwa_dzial"]."</td>");
                          echo("</tr>");
                      }
                  echo("</table>");

          require("connect.php");
          $sql='SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) as dni_zycia FROM pracownicy';
            echo("<h2>ZADANIE 12: $sql</h2>");
            $result = $conn->query($sql);
                echo("<table border>");
                echo("<th>Imie</th>");
                echo("<th>Dni_życia</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["imie"]."</td><td>".$row["dni_zycia"]."</td>");                    
                        echo("</tr>");
                   }
           echo("</table>");

            require("connect.php");
            $sql='SELECT * FROM pracownicy, organizacja WHERE (id_org=dzial) and (imie not like "%a") order by data_urodzenia ASC LIMIT 1';
              echo("<h2>ZADANIE 13: $sql</h2>");
              $result = $conn->query($sql);
                  echo("<table border>");
                  echo("<th>Id_pracownicy</th>");
                  echo("<th>Imie</th>");
                  echo("<th>Dział</th>");
                  echo("<th>Zarobki</th>");
                  echo("<th>Data_urodzenia</th>");
                  echo("<th>Nazwa_działu</th>");
                      while($row=$result->fetch_assoc()){ 
                          echo("<tr>");
                          echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>");
                         echo("</tr>");
                     }
             echo("</table>");
        







             echo("<h1>Formatowanie dat </h1>");


             require("connect.php");
             $sql = ("SELECT *, DATE_FORMAT(data_urodzenia,'%W-%m-%Y') as format from pracownicy");
             echo("<h2>ZADANIE 1: $sql</h2>");
             $result=$conn->query($sql);
             include("connect.php");
                     echo("<table border>");
                     echo("<th>Id_pracownicy</th>");
                     echo("<th>Imie</th>");
                     echo("<th>Dział</th>");
                     echo("<th>Zarobki</th>");
                     echo("<th>Data_urodzenia</th>");
                     echo("<th>Nazwa_działu</th>");
                     while($row=$result->fetch_assoc()) {
                             echo("<tr>");
                                 echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["format"]."</td>");
                             echo("</tr>");
                         }
                     echo("</table>");


             require("connect.php");
             $sql1 = ("SET lc_time_names = 'pl_PL'");
             $sql2 = ("SELECT DATE_FORMAT(CURDATE(), '%W')as data");
             echo("<h2>ZADANIE 2: $sql2</h2>");
             $result=$conn->query($sql1);
             $result=$conn->query($sql2);

             include("connect.php");
                     echo("<table border>");
                     echo("<th>Data</th>");
                     while($row=$result->fetch_assoc()) {
                             echo("<tr>");
                                 echo("<td>".$row["data"]."</td>");
                             echo("</tr>");
                         }
                     echo("</table>");


             require("connect.php");
             $sql1 = ("SET lc_time_names = 'pl_PL'");
             $sql2 = ("SELECT *, DATE_FORMAT(data_urodzenia,'%M-%W-%Y') as format from pracownicy");
             echo("<h2>ZADANIE 3: $sql2</h2>");
             $result=$conn->query($sql);
             include("connect.php");
                     echo("<table border>");
                     echo("<th>Id_pracownicy</th>");
                     echo("<th>Imie</th>");
                     echo("<th>Dział</th>");
                     echo("<th>Zarobki</th>");
                     echo("<th>Data_urodzenia</th>");
                     echo("<th>Format</th>");
                     while($row=$result->fetch_assoc()) {
                             echo("<tr>");
                                 echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["format"]."</td>");
                             echo("</tr>");
                         }
                     echo("</table>");


            require("connect.php");
            $sql2 = ("SELECT curtime(4)");
            echo("<h2>ZADANIE 4: $sql2</h2>");
            $result=$conn->query($sql2);
            include("connect.php");
                      echo("<table border>");
                     echo("<th>Curtime(4)</th>");
                     while($row=$result->fetch_assoc()) {
                            echo("<tr>");
                                  echo("<td>".$row["curtime(4)"]."</td>");
                            echo("</tr>");
                            }
                         echo("</table>");

                         
            require("connect.php");
            $sql1 = ("SET lc_time_names = 'pl_PL'");
            $sql2 = ("SELECT *, DATE_FORMAT(data_urodzenia,'%Y-%M-%W') as format from pracownicy");
            echo("<h2>ZADANIE 5: $sql2</h2>");
            $result=$conn->query($sql1);
            $result=$conn->query($sql2);                
            include("connect.php");
                    echo("<table border>");
                    echo("<th>Id_pracownicy</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dział</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_urodzenia</th>");
                    echo("<th>Format</th>");
                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["format"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");

            require("connect.php");            
             $sql1 = ("SET lc_time_names = 'pl_PL'");
            $sql2 = ("SELECT imie,  DATEDIFF(CURDATE(),data_urodzenia) as dni, DATEDIFF(CURDATE(),data_urodzenia)*24 as godziny, DATEDIFF(CURDATE(),data_urodzenia)*24*60 as minuty FROM pracownicy");
           echo("<h2>ZADANIE 6: $sql2</h2>");
             $result=$conn->query($sql1);
             $result=$conn->query($sql2);
               include("connect.php");
               echo("<table border>");
                echo("<th>Imie</th>");
              echo("<th>Dni</th>");
              echo("<th>Godziny</th>");
              echo("<th>Minuty</th>");
                while($row=$result->fetch_assoc()) {
                     echo("<tr>");
                         echo("<td>".$row["imie"]."</td><td>".$row["dni"]."</td><td>".$row["godziny"]."</td><td>".$row["minuty"]."</td>");
                     echo("</tr>");
                  }
                 echo("</table>");


                 require("connect.php");   
                 $sql2 = ('SELECT DATE_FORMAT("2003-01-26", "%j") as dzienroku');
                 echo("<h2>ZADANIE 7: $sql2</h2>");
                 $result=$conn->query($sql2);
                 include("connect.php");
                         echo("<table border>");
                         echo("<th>Dzień_roku</th>");
                         while($row=$result->fetch_assoc()) {
                                 echo("<tr>");
                                     echo("<td>".$row["dzienroku"]."</td>");
                                 echo("</tr>");
                             }
                         echo("</table>");


          require("connect.php"); 
          $sql1 = ("SET lc_time_names = 'pl_PL'");
          $sql2 = ("SELECT DATE_FORMAT(data_urodzenia,'%W') as dzien, imie, data_urodzenia FROM pracownicy ORDER BY CASE
                    WHEN dzien = 'Poniedziałek' THEN 1
                    WHEN dzien = 'Wtorek' THEN 2
                    WHEN dzien = 'Środa' THEN 3
                    WHEN dzien= 'Czwartek' THEN 4
                    WHEN dzien = 'Piątek' THEN 5
                    WHEN dzien = 'Sobota' THEN 6
                    WHEN dzien = 'Niedziela' THEN 7
                    END ASC");
        echo("<h2>ZADANIE 8: $sql2</h2>");
        $result=$conn->query($sql1);
        $result=$conn->query($sql2);
        include("connect.php");
            echo("<table border>");
            echo("<th>Dzień</th>");
            echo("<th>Imie</th>");
            echo("<th>Data_urodzenia</th>");
          while($row=$result->fetch_assoc()) {
              echo("<tr>");
                  echo("<td>".$row["dzien"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td>");
              echo("</tr>");
          }
             echo("</table>");


        require("connect.php"); 
        $sql1 = ("SET lc_time_names = 'pl_PL'");
        $sql2 = ("SELECT Count(DATE_FORMAT(data_urodzenia,'%W')) as urodzeniwpon FROM pracownicy where DATE_FORMAT(data_urodzenia, '%W')='Poniedziałek'");
        echo("<h2>ZADANIE 9: $sql2</h2>");
        $result=$conn->query($sql1);
        $result=$conn->query($sql2);
        include("connect.php");
             echo("<table border>");
             echo("<th>Urodzeni_w_poniedziałek</th>");
                     while($row=$result->fetch_assoc()) {
                        echo("<tr>");
                             echo("<td>".$row["urodzeniwpon"]."</td>");
                        echo("</tr>");
                        }
                         echo("</table>");

            require("connect.php");
            $sql1 = ("SET lc_time_names = 'pl_PL'");
            $sql2=("SELECT Count(DATE_FORMAT(data_urodzenia,'%W')) as ilosc, DATE_FORMAT(data_urodzenia,'%W') as dzien FROM pracownicy group by dzien ORDER BY CASE WHEN dzien = 'Poniedziałek' THEN 1 WHEN dzien = 'Wtorek' THEN 2 WHEN dzien = 'Środa' THEN 3 WHEN dzien= 'Czwartek' THEN 4 WHEN dzien = 'Piątek' THEN 5 WHEN dzien = 'Sobota' THEN 6 WHEN dzien = 'Niedziela' THEN 7 END ASC");
            echo("<h2>ZADANIE 10: $sql2</h2>");
            $result=$conn->query($sql1);
            $result=$conn->query($sql2);
            echo("<table border>");
            echo("<th>Dzień</th>");
            echo("<th>Ilość</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row["dzien"]."</td><td>".$row["ilosc"]."</td>");
                    echo("</tr>");
                }

            echo("</table>");
?>

</body>
</html>