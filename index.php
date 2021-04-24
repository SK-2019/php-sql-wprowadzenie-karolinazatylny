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
      include("assets/header.php");
      include("assets/menu.php");
?>
  <div class="col-6 col-s-9">
    <h5>Strona Główna</h5>
 <?php
 
 $hostname = $_SERVER['HTTP_HOST'];

if ($hostname == '127.0.0.1'){
    require_once("assets/config.php");   }    
    $d=strtotime("now");
    echo"<li>".date("Y-m-d h:i:sa",$d)."<br>";

require_once("assets/connect.php");
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

require_once("assets/connect.php");
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
  </div>

  <div class="col-3 col-s-12">
  <h2><iframe src="https://open.spotify.com/embed/album/75eP8LZolyNBpqIRyB5pvB" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe></h2>
  <img src="https://i.pinimg.com/originals/4c/75/20/4c75209a730e0786f6410483e0d45cd7.jpg">
  </div>
</div>

</body>
</html>