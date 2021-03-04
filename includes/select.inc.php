<?php 

    $sql = "SELECT * FROM tb_car";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(); // get result
        
        foreach($result as $key => $row) {
            echo "<div class='Container'><div class='Carinfo'>" . $row['carname']. "<br/>";
            echo $row['brand']. "<br/>";
            echo $row['description']. "<br/>";
            echo $row['price'] . "</div>";
            echo "<div class='Carimage'><img class='Carimage2' src='db_images/" . $row['carimage'] . "' /></div>" . "</div>";
        }
?>