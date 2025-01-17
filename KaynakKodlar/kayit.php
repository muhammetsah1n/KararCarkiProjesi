<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cark";

    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $stmt = $pdo->prepare("INSERT INTO users (name, surname, email, message) VALUES (:name, :surname, :email, :message)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);
    $stmt->execute();

    session_start();
    $_SESSION['success'] = true;

    echo "<script>;window.location.href = 'iletisim.php';</script>";

    exit();

?>
