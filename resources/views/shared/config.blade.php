<?php

// one 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ban_da";

// Create connection
//$connection = new mysqli($servername, $username, $password, $dbname);

$conn = new mysqli($servername, $username, $password, $dbname);

//mysql_query("SET NAMES 'utf8'");

$GLOBALS['conn'] = $conn;

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$GLOBALS['hrm_token'] = "32b0e3fff64de942449ec67b6b2244704db2282b08a5491de91dfabc7dfe9797";

$GLOBALS['dhis2_url'] = "http://103.247.238.82:8080/dhismohfw/";
$GLOBALS['dhis2'] = "masud:DgHs9786";

$GLOBALS['dhis2_cc_url'] = "http://103.247.238.76/nationalcc/";
$GLOBALS['dhis2_cc'] = "masud:DGHS1234";
$GLOBALS['sms_api_token'] = "0ecdf90815dfd3b88a72572ddce634f7";
$GLOBALS['months'] = range(1, 12);
?>