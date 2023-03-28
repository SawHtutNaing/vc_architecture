<?php 


$uri = $_SERVER["REQUEST_URI"] ; 


$uriArr = parse_url($uri);

$path = $uriArr['path'];


const Routes = [
    '/' => 'page@home',
    '/about' => "page@about",
    '/list' => 'list@index',
    '/list-create' => 'list@create' , 
    '/list-store' => ["post","list@store"], 
    '/list-delete' =>  ["delete","list@delete"] , 
    '/list-edit' => 'list@edit' , 
    '/list-update'=> ["put","list@update"]

];


if(array_key_exists($path,Routes) && is_array(Routes[$path]) ){
   
    controller(Routes[$path][1]);
}
elseif(array_key_exists($path,Routes) && !is_array(Routes[$path])){
   
    
    controller(Routes[$path]);
}
else{
    
    view("not-found");
}
