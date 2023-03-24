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

run("SELECT (CONCAT('DROP TABLE IF EXISTS ',table_name,';' )) FROM information_schema.tables WHERE TABLE_SCHEMA = '$database';");


logger("All tables are dropped");


createTable("my","name varchar(100) NOT NULL","money int(11) NOT NULL");
createTable("a","name varchar(100) NOT NULL","money int(11) NOT NULL");
createTable("a","name varchar(100) NOT NULL","money int(11) NOT NULL");


