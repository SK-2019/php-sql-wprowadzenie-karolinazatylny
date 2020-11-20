    <?php
    echo("jestes w insert.php <br>");
    echo ("<li>". $_POST['name']);
    echo ("<li>". $_POST['dzial']);
    echo ("<li>". $_POST['zarobki']);
    echo ("<li>". $_POST['data_urodzenia']);


            
    $sql = "(INSERT INTO pracownicy (null, name, dzial,zarobki,data_urodzenia)
            VALUES (
              null, 
              $_POST['name'], 
              $_POST['dzial'], 
              $_POST['zarobki'],
              $_POST['data_urodzenia']
            ))";

 $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php"); 


      echo ($sql);

//       if ($conn->query($sql) === TRUE) {
//         echo "New record created successfully";
//       } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//       }

//       $conn->close();
      ?>
