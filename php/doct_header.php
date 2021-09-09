
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../template/css/cs1.css">  

    <link rel="stylesheet" type="text/css" href="../template/css/mscss.css">  
     <link rel="stylesheet" type="text/css" href="../template/css/siso.css">
<style>
     body {font-family: Arial, Helvetica, sans-serif;}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 50px;
}

button {
    background-color:#4CAF50;
    color: white;
    padding: 10px 10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 50px;
   
}

button:hover {
    opacity: 0.8;
}
#c{
    margin-left: 100px;
    margin-top: 20px;
    width: 310px;
    background-color: ghostwhite;
    position: fixed;
}

</style>
</head>
<body bgcolor="ghostwhite">
      <div class="h">
         <img src="../template/img/logo.png" height="75px" width="75px">
        </div>
        <div class="h1"><b>

        DOCTORS</b>
      </div>

        <div class="t3">
<?php
          if(!isset($_COOKIE['shib']))
          {
            echo'
             <button onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width:auto; border-radius: 50px; background-color: ghostwhite; color: black;font-size: 100%;"><b>Sign Up</b></button>';
         }
?> 

    <div id="id01" class="modal">

        <form class="modal-content animate" action="register.php" method="Post">
           

            <div class="container">

                    
                    <center> <p style="font-size:120%"><b>SIGN UP</b></p> </center><br>
                     

                <label for="uname"><b>Name</b></label><br>
                <input type="text" placeholder="Enter Fullname" name="Name" required>

                
                <br><label for="uname"><b>Email</b></label><br>
                <input type="text" placeholder="Enter email adress" name="email" required>


                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="Password" required>

                <button type="submit" name="Reg">Register</button>

            

            <br><br>
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div> 
            

    </div>
</form>
            
<?php
          if(!isset($_COOKIE['shib']))
          {
            echo'
             Already have an account?
          
            <button onclick="document.getElementById(\'id02\').style.display=\'block\'" style="width:auto; border-radius: 50px; background-color: ghostwhite; color: black;font-size: 100%;"><b>Sign In</b></button>';
}

else
{
$x=$_COOKIE['shib'];
$conn=mysqli_connect("localhost","root","","example");
$sql=mysqli_query($conn,"select `name` from `user` where `email`='$x'");
list($name)=mysqli_fetch_row($sql);
 echo "<div id=\"c\">Welcome&nbsp;&nbsp;". $name."&nbsp;&nbsp;"; 
 echo '<a href="user_logout.php" style="text-decoration: none; color: #303037; font-size: 16px; font-family: Century;"><b>Sign Out</b></a></div>';  
}
?>
    <div id="id02" class="modal1">
        

        <form class="modal1-content animate" action="register.php" method="Post">
           

            <div class="container2">
                    <br><br>
                   <center> <p style="font-size:120%"><b>SIGN IN</b></p> </center>
                    <br><br>
                
                <label for="uname"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="Username" required>

                

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="Password" required>

                <button type="submit" name="Reg">Register</button>

           
                    <br><br>
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>

    </div>
</form>

        </div>
    </div>
<div class="ak"> 
        <ul>  
        	<li>&nbsp;</li>
        <li>
            <a href="../index.php">Home</a>
        </li>
        <li>
            <a href="Hospital_List.php">Hospitals</a>
        </li>
        <li>
            <a href="#" class="active"><b>Doctors</b></a>
        </li>
       <li>
            <a href="Help_Support.php">Help & Support</a>
        </li>
        </ul>
    </div> 
   
<br><br><br>