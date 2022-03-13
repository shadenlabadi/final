 <?php include('config/constants.php');  ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <style>
           ::-webkit-scrollbar {
  width: 10px;
  background-color: black;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 30px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #990000; 
  border-radius: 2px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #990000; 
}
            html{
                background-image: url(img/ee.jpg);
                background-size: cover;
                background-repeat: no-repeat;
            }
            
            .login{
                border: 1px solid grey;
                width: 40%;
                margin: 10% auto;
                padding: 2%;
                color: #990000;
                background-color: #000000;
                opacity: 60%;
                font-style:  italic;
                font-weight: bold;
             //   background-image: url(img/1.jpg);
            }
            .text-center{
                text-align: center;
            }
            
            h1{
                color: #990000;
            }
            
            input{
                border: 5px #990000 solid;
                border-radius: 20%;
            }
           
            
            .btn-primary{
                                width: 30%;

               // border: 1px  #990000 solid;
                padding: 3px;
                background: #cc9900;
                    font-size:25px;
                    text-align: center;

            }

            
          .login  img{
                 float: left;
  width: 100px;
  height: 100px;
  //background: #555;
            }
            
            .login h1{
               position: relative;
  top: 18px;
  text-align: center;
 right: 50px;   
            }
        </style>
    </head>
    <body>
        <div class="login">
          
            <img src="img/SECTOR1.png" alt="logo" />

            <h1 class="text-center">Login</h1>
          
            <br><br>
            <?php 
            
            
            if(isset($_SESSION['login'])){
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
            
            
            
            
            ?>

            <br><br><br>
            <form action="#" method="POST" class="text-center">
                Username:<br><br>
                <input type="text" name="name" palacholder="Enter your username" class="form-input">
                <br><br>
                Password:<br><br>
                <input type="password" name="pass" palacholder="Enter your password">
                <br><br><br><br>
                <input type="submit" name="submit" value="login" class="btn-primary">


            </form>
        </div>
    </body>
</html>
<?php
if(isset($_POST['submit'])){
   $id=$_POST['id']; 
   $name=$_POST['name'];
   $pass=md5($_POST['pass']);
   
   $sql="SELECT *FROM login WHERE name='$name' AND pass='$pass'";
   //echo $sql;
   $res= mysqli_query($conn, $sql);
    
   //count rows
   
   $count=mysqli_num_rows($res);
   
   if($count==1){
     $_SESSION['login']="<div style=color:white;text-align: center;
>Login Successful.</div>";
     
     
       header('location:'.SITEURL.'index.php');   
      
    }   
   
      
   
    else{
           $_SESSION['login']="<div style=color:white;text-align: center;
>Login Not Successful.Please try again!</div>";
        header('location:'.SITEURL.'login.php');
}
}
?>
