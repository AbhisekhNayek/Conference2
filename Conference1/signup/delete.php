<?php
 include 'contact/conn.php';
 $id = $_GET['id'];
 $o ="DELETE FROM `contact` WHERE id=$id";

 mysqli_query($conn,$o);
 header('location:home.php');

?>