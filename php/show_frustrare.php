<?php
    include 'connect_to_db.php';
    $sql = "SELECT * FROM Teme";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            
            echo("<div>
                <div class='pr-3'><form action='/php/delete_frustrare.php' method='post'><input type='hidden' value=".$row['id']." name='deleteId' id='deleteId'><button class='btn btn-danger float-right'>Delete</button></form></div>
                <div><p class='mb-0 tema-frustrare'>".$row["frustrare"]."</p><p class='tema-materie'>(".$row["materie"].")</p></div>
                </div>");
        }
    } 
    $conn->close();
?>