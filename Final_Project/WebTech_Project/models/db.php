<?php

$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "useraccounts";

function getConnection()
{
    global $host;
    global $dbuser;
    global $dbname;
    global $dbpass;

    return $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
}

?>