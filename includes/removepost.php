<?php
require 'database.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM posts WHERE id=$id";
    mysqli_query($db,$query);
    header('location:../adminlogin/index.php');
}
?>