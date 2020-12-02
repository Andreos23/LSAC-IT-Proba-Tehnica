<?php
    include 'connect_to_db.php';
    $materie = $_GET["materie"];
    $frustrare = $_GET["frustrare"];
    $sql = "INSERT INTO Teme (materie,frustrare) VALUES ('$materie','$frustrare');";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      header('Location: ' . $_SERVER['HTTP_REFERER']);
?>