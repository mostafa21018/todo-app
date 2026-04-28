<?php

if(isset($_GET['id'])){
    $connection = mysqli_connect("localhost", "root", "", "todo");
    if(!$connection){
    echo "There are error ";
    }
    $id=$_GET['id'];
    $sql = "DELETE FROM `tasks` WHERE id = '$id' ";
    mysqli_query($connection,$sql);
    header('location:../index.php');

}