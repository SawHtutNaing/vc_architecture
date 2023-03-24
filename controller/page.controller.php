<?php 

function home (){
 view('home' , ['myName' => 'saw htut naing' , 'age' => 18 ]);
}

function about (){
 view('about');

}