<?php
    include 'connect_to_db.php';
    $id = $_POST["deleteId"];
    $sql = "DELETE FROM Teme WHERE id='$id';";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      header('Location: ' . $_SERVER['HTTP_REFERER']);
?>