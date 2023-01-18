<?php
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
<TITLE>Regestered Users</TITLE>

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

</style>



</HEAD>
<BODY>
	<div class="phppot-container" >
		<div class="page-content jumbotron" style="  background-color:#F4EAD5;">
             <h4>Announcement</h4>
        </div>
  
        
       <div class="bt">
       <button type="button" class="btn btn-Primary"><a href="home.php" style="color:white">Messages</a></button>
        <button type="button" class="btn btn-primary"><a href="madmin.php" style="color:white">Manage Admin</a></button>
        <button type="button" class="btn btn-primary"><a href="reguser.php" style="color:white">Regestered Users</a></button>
        <button type="button" class="btn btn-secondary"><a href="logout.php" style="color:white">Logout</a></button>
        </div>
	</div>


    
    
</BODY>
</HTML>
