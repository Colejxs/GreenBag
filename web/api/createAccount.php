<?php

/*************************************************************************************************
 * createAccount.php
 *
 * Copyright 2017-2021
 *
 * Creates a user account. This page expects the following request parameters to be present:
 *
 * - email          the user's email address
 * - displayName    the user's display name
 * - password       the user's password
 *
 * This page returns the following HTTP status codes:
 *
 * - 200 if the account was created successfully
 * - 400 if the given email address is already in use
 * - 409 if the given email address is already in use but with an SSO provider
 * - 500 if the account could not be created for some other reason
 *************************************************************************************************/

require_once '../library.php';

$dbh = get_database_connection();
$email = mysqli_real_escape_string($dbh, $email);
$password = mysqli_real_escape_string($dbh, $password);
$firstName = mysqli_real_escape_string($dbh, $firstName);
$lastName = mysqli_real_escape_string($dbh, $lastName);
$isActive = mysqli_real_escape_string($dbh, $isActive);

$sql = <<<SQL
SELECT user_id
  FROM Users
 WHERE user_email = '{$email}'
SQL;



$result = mysqli_query($dbh, $sql);



$count = mysqli_num_rows($result);
echo $count;
if ($count == 0)
{
    $sql = <<<SQL
    INSERT INTO Users (user_email, user_password, user_first_name, user_last_name)
    VALUES ('{$email}', '{$password}', '{$firstName}', '{$lastName}')
SQL;


    if (mysqli_query($dbh, $sql))
    {
        
        http_response_code(200);
    }
    else
    {
        http_response_code(500);
    }
}
else
{
    
    http_response_code(400);
}