<?php
    include 'connect_to_db.php';
    $sql = "SELECT * FROM Teme";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            
            echo("<div><p class='mb-0 tema-frustrare'>".$row["frustrare"]."</p>");
            echo("<p class='tema-materie'>(".$row["materie"].")</p></div>");
        }
    } 
    $conn->close();
?>