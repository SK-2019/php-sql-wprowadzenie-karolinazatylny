<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Coda+Caption:wght@800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
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
    <h5>Strona Główna</h5>
 <?php

require_once('connect.php');
echo("<h2>Tabela Wszystkich Pracowników:</h2>");
$sql='SELECT * FROM pracownicy, organizacja WHERE dzial=id_org';
$result = $conn->query($sql);
    echo("<table border=1>");      
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }
        echo("</table>");

require_once('connect.php');
echo("<h2>Tabela Funkcji Agregujących:</h2>");
$result = $conn->query('SELECT dzial, sum(zarobki) as suma, avg(zarobki) as srednia, min(zarobki) as min, max(zarobki) as max, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial');
            echo("<table border=1>"); 
            echo("<th>Dział</th>");
            echo("<th>Suma</th>");
            echo("<th>Średnia</th>");
            echo("<th>Min</th>");
            echo("<th>Max</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['dzial']."</td><td>".$row['suma']."</td><td>".$row['srednia']."</td><td>".$row['min']."</td><td>".$row['max']."</td><td>".$row["nazwa_dzial"]."</td>");
        echo("</tr>");
    }
    echo("</table>");


	 
?>
<hr>
  </div>

  <div class="col-3 col-s-12">
  <img src="https://i.pinimg.com/originals/5c/59/9b/5c599b58148043e8129172b937ecf148.jpg"
  </div>
</div>

</body>
</html>