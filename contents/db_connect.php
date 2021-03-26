<?php
    session_start();
    ob_start();
    $server="localhost";
    $serverUsername="root";
    $serverPassword="";
    $dbName="imagegallery";
    
    $conn=new mysqli($server,$serverUsername,$serverPassword,$dbName);

?>