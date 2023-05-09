<?php

include('library.php');
$dbh = get_database_connection();
$email = mysqli_real_escape_string($dbh, $email);
$password = mysqli_real_escape_string($dbh, $password);


$sql = <<<SQL
SELECT user_id, user_first_name, user_last_name, user_email, user_password
FROM Users
WHERE user_email = "{$email}"
AND user_password = "{$password}"
SQL;

$result = mysqli_query($dbh, $sql);
$count = mysqli_num_rows($result);
if ($count == 1){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    session_start();

    $_SESSION['userId'] = $row['user_id']; // set data here
    $_SESSION['firstName'] = $row['user_first_name']; // set data here
    $_SESSION['lastName'] = $row['user_last_name']; // set data here
   

    session_write_close();
    
    http_response_code(200);
} else{
    http_response_code(401);
}