<?php 
    include('library.php');

    $dbh = get_database_connection();
    

    print_r($_REQUEST);



    foreach ($_REQUEST as $key => $value) {
        echo $key." = " . $value . "<br>";
 
        if(str_starts_with($key, "item")){
            $checkedId = substr($key,-1);
            $sql = <<<SQL
                INSERT INTO Take (take_user_id, take_sList_id )
                VALUES ({$_SESSION['userId']}, {$checkedId})
            SQL;
        }
    }   
?> 



