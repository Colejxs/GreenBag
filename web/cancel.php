<?php

/*************************************************************************************************
 * save.php
 *
 * Page to save a single application. This page expects the following request paramaters to
 * be set:
 *
 * - appId (this value will be empty if saving a new record)
 * - cusId (this value will be empty if saving a new record)
 * - date
 * - firstName
 * - lastName
 * - phone
 * - email
 * - parkAreas - this is an array of IDs for park_area records
 *************************************************************************************************/

include('library.php');

$conn = get_database_connection();


if(($_SESSION["isActive"] = 0)){
    /*
     * This is an existing application (UPDATE operation)
     */

    // Update to cancle for the week 
    $sql = <<<SQL
    UPDATE User
       SET user_active = 1
     WHERE user_id = {$_SESSION["userId"]}
    SQL;

    if (!$conn->query($sql))
    {
        die('Error updating customer record: ' . $conn->error);
    }
}
// activate for this week 
elseif ($_SESSION["isActive"] = 1)
{
    $sql = <<<SQL
    UPDATE User
       SET user_active = 0
     WHERE user_id = {$_SESSION["userId"]}
    SQL;

    if (!$conn->query($sql))
    {
        die('Error updating customer record: ' . $conn->error);
    }
}


$conn->close();

header('Location: index.php?content=home');