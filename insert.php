<?php
        echo("Imie:".$_POST['imie']."<br>");
        echo("Dzial:".$_POST['dzial']."<br>");
        echo("Zarobki:".$_POST['zarobki']."<br>");
        echo("Data:".$POST['data']); 
      require_once("connect.php");
      $sql =  "INSERT INTO pracownicy(id_pracownicy, imie, dzial, zarobki, data_urodzenia) VALUES (NULL,'".$_POST['imie']."','".$_POST['dzial']."','".$_POST['zarobki']."','".$POST['data']."')";
      mysqli_query($conn,$sql);
      mysqli_close($conn);
    ?>
