<?php
session_start();
if(isset($_POST['login']))
{
    $a=$_POST['Username'];
    $b=$_POST['Password'];
    $conn=mysqli_connect("localhost","root","","example");
    $sql=mysqli_query($conn,"select `user_id` from `admin` where `Password`='$b'");
    list($user_id)=mysqli_fetch_row($sql);
    if($a==$user_id)
    {
        $_SESSION['login_user']=$user_id;
        header("LOCATION:profile.php");
    }
    else
    {
        header("LOCATION:../index.php");
    }
}
else
{
?>


<html>
<head>
    <title> ADMIN LOGIN PAGE </title>
    
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        
       
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        
        
        button {
            background-color: rgb(105, 199, 243);
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        
        button:hover {
            opacity: 0.8;
        }
        
        .container01 {
     padding: 25px;
     width: 250px;
     height: 350px;
     position: relative;
     top: 150px;
     left: 520px;
     background:rgba(214, 247, 247, 0.945);
        }

        #body{
width:1358px;
height: 100%;
position: relative;
background: url(images/thumb-1920-658238.jpg);
background-size: cover;
} 
</style> 
</head>
<body>
    <form action="index.php" method="POST">
<div id="body">
    <div class="container01">
       <center><b><h3> WELCOME ADMIN </h3></b></center>
        <br><br>
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="Username" required>
        <br><br>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="Password" required>
        <br><br> 
        <button type="submit" name="login">Login</button>
        <label>
    	</div>
	</div>
</form>
</body>
</html>

<?php
}
?>
