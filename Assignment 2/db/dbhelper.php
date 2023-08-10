<?php
header("Content-type: text/html; charset=utf-8");
require_once ('config.php');


function execute($sqli)
{
    $con = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    mysqli_set_charset($con, 'UTF8');
    mysqli_query($con, $sqli);
    mysqli_close($con);
}


function executeResult($sqli)
{
    $con = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    mysqli_set_charset($con, 'UTF8');
    $result = mysqli_query($con, $sqli);
    $data = [];
    
    while ($row = mysqli_fetch_array($result,1))
    {
      
        $data[] = $row;
    }
  
    mysqli_close($con);
    return $data;
}