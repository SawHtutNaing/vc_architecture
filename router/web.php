<?php 

// dd("web .php ");
$uri = $_SERVER["REQUEST_URI"] ; 


$uriArr = parse_url($uri);
// dd($uriArr);
$path = $uriArr['path'];


const Routes = [
    '/' => 'page@home',
    '/about' => "page@about",
    '/list' => 'list@index',
    '/list-create' => 'list@create' , 
    '/list-store' => 'list@store' , 
    '/list-delete' => 'list@delete' , 
    '/list-edit' => 'list@edit' , 
    '/list-update'=> 'list@update'

];

if(array_key_exists($path,Routes) && is_array(Routes[$path]) && checkRequestMethod(Routes[$path][0]) ){
    controller(Routes[$path][1]);
}
elseif(array_key_exists($path,Routes) && !is_array(Routes[$path])){
    controller(Routes[$path]);
}
else{
    view("not-found");
}
