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
    table {
			border:1px dashed #b3adad;
			border-collapse:separate;
			padding:5px;
            margin-left:35%;
		}
		table th {
			border:1px dashed #b3adad;
			padding:5px;
			background: #0b0971;
			color: #fdfcfc;
		}
		table td {
			border:1px dashed #b3adad;
			text-align:center;
			padding:5px;
			background: #ffffff;
			color: #313030;
		}

</style>



</HEAD>
<BODY>
	<div class="phppot-container" >
		<div class="page-content jumbotron" style="  background-color:#F4EAD5;">
             <h4>Admin's</h4>
        </div>
  
        
       <div class="bt">
       <button type="button" class="btn btn-Primary"><a href="home.php" style="color:white">Messages</a></button>
        <button type="button" class="btn btn-primary"><a href="reguser.php" style="color:white">Regestered Users</a></button>
        <button type="button" class="btn btn-primary"><a href="ann.php" style="color:white">Announcement</a></button>
        <button type="button" class="btn btn-secondary"><a href="logout.php" style="color:white">Logout</a></button>

       </div>
       <br><br>
       <div>
       <table>
		<thead>
			<tr>
				<th>id</th>
				<th>User Name</th>
				<!-- <th>Password</th> -->
				<th>Email</th>
				<th>Created At</th>
				<!-- <th>Update</th> -->
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>

        <?php
        
    
        $q = "Select * from tbl_member";
        
        $query = mysqli_query($conn,$q);
        
        while ($res = mysqli_fetch_array($query)) {
        
    ?>
			<tr>
				<td><?php echo $res['id']; ?></td>
				<td><?php echo $res['username']; ?></td>
				<!-- <td><?php echo $res['password']; ?></td> -->
				<td onclick="sendEmail();"><?php echo $res['email']; ?></td>

				<td><?php echo $res['create_at']; ?></td>
				<!-- <td><a href="">Update</a></td> -->
				<td><a href="delmadmin.php?id=<?php echo $res['id']; ?>">Delete</a></td>
			</tr>

            <?php
        }
    ?>  
    <!-- <div >Send e-mail</div> -->
            <tr>
                <td rowspan="4"></td>
                <td><a  href="user-registration.php">Add Admin</a></td>
            </tr>
		</tbody>
	</table>
        
       </div>
	</div>
    
    <script>
    function sendEmail() 
    {
        window.location = "mailto:xyz@yourapplicationdomain.com";
    }
    </script>
</BODY>
</HTML>
