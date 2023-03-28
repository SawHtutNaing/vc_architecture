<?php

system("clear");
require_once "./core/connect.php";
require_once "./core/functions.php";

$tables = all("show tables");
// print_r($tables);
// die();
foreach($tables as $table){
    

    
    run("DROP TABLE IF EXISTS ".$table['Tables_in_mvc_learning']);
}

// run("SELECT (CONCAT('DROP TABLE IF EXISTS ',table_name,';' )) FROM information_schema.tables WHERE TABLE_SCHEMA = '$database';");


logger("All tables are dropped");


createTable("mvcs","name varchar(100) NOT NULL","phone int(50) NOT NULL");
createTable("a","name varchar(100) NOT NULL","phone int(50) NOT NULL");
createTable("b","name varchar(100) NOT NULL","phone int(50) NOT NULL");



