<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "todo");

if(!$connection){
    echo "There are error ";
}


if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['title'])){
    // var_dump($_POST['title']);
    $title = trim(htmlspecialchars(htmlentities($_POST['title'])));
    
    $sql = "INSERT INTO `tasks`(`title`) VALUES ('$title')";
    $result = mysqli_query($connection, $sql);
    if( mysqli_affected_rows($connection)==1){
        $_SESSION['success'] = "data inserted";
    }
    // redirection
    header('location:../index.php');
}