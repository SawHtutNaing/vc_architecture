<?php 
require_once '../index.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="<?= url()."/css/bootstrap.css" ?>">
<body>

<div class="container">
<?php 
require_once View_Dir."/template/session-message.php";
?>
