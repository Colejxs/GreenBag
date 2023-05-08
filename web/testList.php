<?php
    extract($_REQUEST);
    $conn = get_database_connection();
    $query = <<<SQL
        SELECT *
        FROM ShoppingList
    SQL;

    $result = $conn->query($query);
    while($record = $result -> fetch_assoc()){

        echo "<h6>";
        // echo $record['loc_name'];
        echo $record['sList_product_name'];
        echo "</h6>";
    }
?>