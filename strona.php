  
<html>
        <head>
        <link rel="stylesheet" href="styles.css">
        </head>
<div class="nav"
        <h3>
        <a href="https://github.com/SK-2019/php-sql-wprowadzenie-karolinazatylny"><b>GITHUB</b></a>
    <a href="index.php"><b>STRONA GŁÓWNA</b></a>
    <a href="zadania.php"><b>ZADANIA</b></a>
    <a href="agregat.php"><b>FUNKCJE AGREGUJĄCE</b></a>
    <a href="orgpracownicy.php"><b>ORGANIZACJA I PRACOWNICY</b></a>
    <a href="pracownicy.php"><b>PRACOWNICY</b></a>
    <a href="dataiczas.php"><b>DATA I CZAS</b></a> 
    <a href="formularz.html"><b>FORMULARZ</b></a>
    <a href="danedobazy.php">DANE DO BAZY</b></a>
    <a href="ksiazki.php">KSIĄŻKI</b></a>
        </h3>
</div>
  
</html> 

<?php
include("connect.php");
echo("<li> imie: ".$_POST['firstname']."</li>");
echo("<li> nazwisko: ".$_POST['lastname']."</li>");
echo("<li> miasto: ".$_POST['city']."</li>");
echo("<li> numer tel: ".$_POST['phone']."</li>");
echo("<li> kod pocztowy: ".$_POST['poscode']."</li>");


$sql="INSERT INTO 'pracownicy'('id', 'imie', 'dzial', 'zarobki', 'data_urodzenia') VALUES (null,'józef',2,23,'2001-10-23')";
$conn->query($sql);

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