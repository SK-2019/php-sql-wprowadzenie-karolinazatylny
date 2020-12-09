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
    <h5>Książki</h5>
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
 echo("<select name='title' id=''title'>");
            while($row=$result->fetch_assoc()){ 
                    echo("<option value=".$row["id"].">".$row["autor"]."</option>"); 
            }

        echo("</select>");


$sql = 'SELECT * FROM biblTytul';
echo("<h2>".$sql."</h2>");

 $result = $conn->query($sql);
        echo("<select name='title' id=''title'>");
            while($row=$result->fetch_assoc()){ 
                echo("<option value=".$row["id"].">".$row["tytul"]."</option>"); 
            }

        echo("</select>");

?>
            <hr>
              </div>
            
              <div class="col-3 col-s-12">
              <img src="https://i.pinimg.com/originals/21/a7/09/21a709084d7132848f730e245d41c584.jpg">
            </div>
            
              <p>
              <div class="obrazek">    
              <img src="https://i.pinimg.com/originals/57/98/5b/57985bf3c5bf34f9c6c41aeb849d3a5b.jpg"></p>
            </div>
            </div>
            
            </body>
</html>