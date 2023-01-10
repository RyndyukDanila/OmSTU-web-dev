<?php

include("db/db.php");

$errMsg = '';

// Добавление
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-add'])){

    $owner = $_SESSION['id'];;
    $name = trim($_POST['name']);
    $age = trim($_POST['age']);
    $gender = trim($_POST['gender']);
    $breed = trim($_POST['breed']);

    if($name === '' || $age === '' || $gender === '' || $breed === ''){
        $errMsg = "Не все поля заполнены!";
    }

    else{
        $existence = selectOne('breeds', ['name' => $breed]);
        if(!$existence){
            $errMsg = "Такая порода не поддерживается";
        }
        else{
            $breed = selectOne('breeds', ['name' => $breed]);
            $post_pets = [
                'age' => $age,
                'name' => $name,
                'gender' => $gender,
                'breed_id' => $breed['id'],
                'user_id' => $owner
            ];
            $pet_id = insert('pets', $post_pets);
        }
    }
}

?>