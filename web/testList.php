<?php 
    extract($_REQUEST);
    $conn = get_database_connection();
    $query = <<<SQL
        SELECT * 
        from ShoppingList
        order by sList_type_order, sList_designation;
    SQL;

    $result = $conn->query($query);
?>
<section class="page">
    <h1 class="listTitle">Shopping List</h1>

    <form method="POST" action="claimItems.php">
    <?php
        // while($record = $result -> fetch_assoc() && $result["sList_type"] == "Food"){
        $lastType = null;
        $lastDesignation = null;

        
        while($record = $result -> fetch_assoc()){
            
            $type = $record['sList_type'];
            $Designation = $record['sList_designation'];
            
            // echo "<li>";
            // echo $record['sList_product_name'];
            // echo "</li>";
 
            if($type != $lastType) 
            {
                echo "<h2>";
                echo $record['sList_type'];
                echo "</h2>";
            }

            if($Designation != $lastDesignation) 
            {
                echo "<h3>";
                echo $record['sList_designation'];
                echo "</h3>";
            }

            echo "<li>";
            echo "<input type='checkbox' id='item" . $record['sList_id'].  "' name='item" . $record['sList_id'].  "'>";

            echo "<label for='" .  $record['sList_id'] . "'>". $record['sList_product_name'] ."</label>";


            echo "</li>";

            $lastType = $type;
            $lastDesignation = $Designation;

        }

        if(isset($_SESSION['userId'])){
            echo "<input type='submit' id='submit'>";
            echo "<label for='submit'></label>";
        }
        else {
            echo "<a class='' href='index.php?content=login'>Login</a>";
        }
    ?>
    </form>

    
    
    

   

    
</section>

    
