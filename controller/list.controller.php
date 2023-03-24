<?php 

function index(){
    $sql = "SELECT * FROM mvcs";   
    if(!empty($_GET["q"])){
        $q = $_GET["q"] ; 
        $sql .= " WHERE name LIKE '%$q%'";
    }
    
  

    view('list/index' , ['list' => paginate($sql)]) ;
}


function create(){

    view('list/create');
}


function store(){

    $name = $_POST['name'];
    $phone = $_POST['phone'];
   
   $sql = "INSERT INTO `mvcs`( `name`, `phone`) VALUES ('$name' , '$phone')";

   run($sql);

   redirect(route('list') , 'List created successfully');
    
}




function delete(){
    
    $id = $_GET['id'] ; 
    $sql = "DELETE FROM mvcs WHERE id=$id";
    
   run($sql);

    // header('location:'.url('list'));
    redirect($_SERVER['HTTP_REFERER'] , 'list delet successfully');

    
}

function edit(){
    $id = $_GET['id'];
    $sql = "SELECT * FROM mvcs where id = $id";
    
    
    
    // while($row =  ){
    //     $list[]= $row;
    // }
    // // print_r($list);
    // dd($list);
    
    

     view('list/edit' , ['list' => first($sql)]) ;
    
}


function update(){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
   $sql = "UPDATE `mvcs` SET `name`='$name',`phone`='$phone' WHERE id = $id ";

    run($sql);
    redirect($_SERVER['HTTP_REFERER'] , "list updated successfully");

    
}