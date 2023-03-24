<?php 

$hostname = "localhost";
    $username = 'sawhtut';
    $password = "sawhtut";
    $database ='mvc_learning';
    
    $auth = mysqli_connect($hostname, $username , $password , $database);
    if($auth){
    //    print_r($auth);
    }