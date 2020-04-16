<?php

if(isset($_POST['metodo'])){

    $metodo = $_POST['metodo'];
    if($metodo == "get"){
        header('location: ../view/get.php');
    }elseif($metodo == "list"){
        header('location: ../view/list.php');
    }elseif($metodo == "create"){
        header('location: ../view/create.php');
    }elseif($metodo == "update"){
        header('location: ../view/update.php');
    }elseif($metodo == "delete"){
        header('location: ../view/delete.php');
    }elseif($metodo == "filter"){
        header('location: ../view/filter.php');
    }elseif($metodo == "nested"){
        header('location: ../view/nested.php');
    }

}