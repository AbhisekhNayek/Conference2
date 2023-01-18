<?php
 include 'contact/conn.php';
 $id = $_GET['id'];
 $o ="DELETE FROM `tbl_member` WHERE id=$id";

 mysqli_query($conn,$o);
 header('location:madmin.php');

?>