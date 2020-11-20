<?php



               $conn = new mysqli("mysql-karolinazatylny.alwaysdata.net","217224","karolcia9","karolinazatylny_123");
                $result=$conn->query($sql);
                include("connect.php");

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            
            $sql = "INSERT INTO Pracownik (null, imie, dzial, zarobki) 
            VALUES (null,'Ksawery', 3, 36,'1995-10-21')";
            
            
            
            $conn->query($sql);

            $conn->close();
            ?>
