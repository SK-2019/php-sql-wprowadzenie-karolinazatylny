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
    <h5>Książki</h5>
 <?php
  
 require_once("../assets/connect.php");
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
  
   require_once("../assets/connect.php");
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
        
              </div>
            
              <div class="col-3 col-s-12">
              <h2><iframe src="https://open.spotify.com/embed/album/75eP8LZolyNBpqIRyB5pvB" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe></h2>
              <img src="https://i.pinimg.com/originals/4c/75/20/4c75209a730e0786f6410483e0d45cd7.jpg">
            </div>
          
            
            </body>
</html>