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
      include("../assets/header.php");
      include("../assets/menu.php");
      ?>

  <div class="col-6 col-s-9">
<body>
<h5>Dodawanie pracownika</h5>
<h7>
<form action="/dane-do-bazy/insert.php" method="POST">
	<input type="text" name="name" placeholder="Imie"></br>
	<input type="number" name="dzial" placeholder="Dział"></br>
	<input type="number" name="zarobki" placeholder="Zarobki"></br>
	<input type="date" name="data_urodzenia" placeholder="Data urodzenia"></br>
	<input type="submit" value="wyślij do insert.php">
</form>
</h7>

<h5>Usuwanie pracownika</h5>
<h7>
<form action="/dane-do-bazy/delete.php" method="POST">
   <input type="number" name="id"></br>
   <input type="submit" value="Usuń pracownika">
</form>
</h7>
</body>

<?php

require_once("../assets/connect.php");

$sql = ("SELECT id_pracownicy, imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org");
$result=$conn->query($sql);
    echo("<table border=1>");
    echo("<th>Id_pracownicy</th>");
    echo("<th>Imie</th>");
    echo("<th>Zarobki</th>");
    echo("<th>Data_urodzenia</th>");
    echo("<th>Nazwa_działu</th>");
    echo("<th>Usuwanie</th>");


    while($row=$result->fetch_assoc()) {
            echo("<tr>");
                echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>
		
		<td>
		<form action='/dane-do-bazy/delete.php' method='POST'>
   			<input type='number' name='id' value='".$row['id_pracownicy']."' hidden></br>
   			<input type='submit' value='X'>
		</form>
		</td>
		
		");
            echo("</tr>");
        }
    echo("</table>");
?>
  
              </div>
            
              <div class="col-3 col-s-12">
              <h2><iframe src="https://open.spotify.com/embed/album/75eP8LZolyNBpqIRyB5pvB" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe></h2>
              <img src="https://i.pinimg.com/originals/4c/75/20/4c75209a730e0786f6410483e0d45cd7.jpg">
            </div>
            
            </body>
</html>