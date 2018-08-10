<?php

if (isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["email"]) && isset($_POST["phonenumber"])) { 

	// Формируем массив для JSON ответа
    $result = array(
      'name' => $_POST["name"],
      'surname' => $_POST["surname"]
      'email' => $_POST["email"]
      'phonenumber' => $_POST["phonenumber"]
      'description' => $_POST["description"]
    ); 

    // Переводим массив в JSON
    echo json_encode($result); 
}

?>
