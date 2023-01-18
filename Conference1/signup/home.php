<?php
include 'contact/conn.php';

session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    
    session_write_close();
    $url = "./index.php";
    header("Location: $url"); 
}

?>
<HTML>
<HEAD>
<TITLE>ICCTE-23 Admin</TITLE>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<link rel="stylesheet" href="assets/css/style.css">


<style>
    
    .jumbotron{
        padding:10px;
        justify-content: center;
        text-align: center ;
        t
    }
    .phppot-container a{
        text-decoration: none;
    }
    .phppot-container button{
        margin-left: 10px;
        margin-top: 5px;
    
    }

    .bt{
      
        text-align:right;
        margin-right:30px;
    }


    table.GeneratedTable {
  width: 70%;
  background-color: #ededed;
  border-collapse: collapse;
  border-width: 2px;
  border-color: #360368;
  border-style: outset;
  color: #000000;
  margin-left: 20%;
}

table.GeneratedTable td, table.GeneratedTable th {
  border-width: 2px;
  border-color: #360368;
  border-style: outset;
  padding: 1px;
}

table.GeneratedTable thead {
  background-color: #ffffff;
}

.table{
    text-align: center;
}
h1{
    text-align:center;
}

tbody tr td a{
    color: red;
    text-decoration: none ;
}
.GeneratedTable{
    text-align:center;
}
</style>



</HEAD>
<BODY>
	<div class="phppot-container" >
		<div class="page-content jumbotron" style="  background-color:#F4EAD5;">
             <h4>Welcome  <?php echo $username;?> to ICCTE-23 Admin Pannel</h4>
        </div>
  
        
       <div class="bt">
       <button type="button" class="btn btn-Primary"><a href="reguser.php" style="color:white">Regestered Users</a></button>
        <button type="button" class="btn btn-primary"><a href="madmin.php" style="color:white">Manage Admin</a></button>
        <button type="button" class="btn btn-primary"><a href="ann.php" style="color:white">Announcement</a></button>
        <button type="button" class="btn btn-secondary"><a href="logout.php" style="color:white">Logout</a></button><br>

       </div>
	</div>
    <br><br>

    <h1>User Messages</h1>
    <div class ="table">


<table class="GeneratedTable">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Message</th>
      <th>Delete</th>
    </tr>
  </thead>

    <?php
        // $fname = $_POST['fname'];
        // $lname = $_POST['lname'];
        // $email = $_POST['email'];
        // $phone = $_POST['phone'];
        // $msg = $_POST['message'];
    
        $q = "Select * from contact";
        
        $query = mysqli_query($conn,$q);
        
        while ($res = mysqli_fetch_array($query)) {
        
    ?>

  <tbody>
    <tr>
      <td> <?php echo $res['id']; ?> </td>
      <td> <?php echo $res['Fname']; ?> <?php echo $res['Lname']; ?> </td>
      <td> <a href="mailto:abc@gmail.com"><?php echo $res['Email']; ?></a></td>
      <td> <?php echo $res['Phone']; ?> </td>
      <td> <?php echo $res['Message']; ?></td>
      <td><a href="delete.php?id=<?php echo $res['id']; ?>">Delete</a></td>
      
    </tr>
    <?php
        }
    ?>
  </tbody>
</table>



    </div>
    
    
</BODY>
</HTML>
