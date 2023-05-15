<?php 
    extract($_REQUEST);
    $conn = get_database_connection();
    $query = <<<SQL
        SELECT *
        FROM ShoppingList
    SQL;

    $result = $conn->query($query);
?>
<section class="page">
    <h1 class="listTitle">Shopping List</h1>
    <h2>Food</h2>
    <ol class="continuous-list">
        <?php
            // while($record = $result -> fetch_assoc() && $result["sList_type"] == "Food"){
            while($record = $result -> fetch_assoc()){
                echo "<li>";
                echo $record['sList_product_name'];
                echo "</li>";
            }
        ?>
    </ol>
</section>

    
