<?php
session_start();
require_once('../../data/connect.php');
$message ='';
if(!empty($_POST)){

  if(isset($_POST['loginname'])){
    $loginname = $_POST['loginname'];
    $password = $_POST['password'];
    $sql ="select *from users where loginname = '$loginname' and password = '$password' ";
    var_dump($user);
    $user = executeResult($sql);
 
    if($user != null){
       
      $_SESSION['login'] = $user ;
    
      header('Location:../../index.php');
    }
   
  
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Now</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="Register">
    <h2>Login</h2>
    <form method="POST" action="">
        <table>
            <tr>
                <td>Login name</td>
                <td><input type="text" class="loginname" name="loginname" size="30" placeholder="Account name"></td>
            </tr>
           
            <tr>
                <td>Password</td>
                <td><input type="password" class="password" name="password" size="30" placeholder="Password"></td>
            </tr>
           
            <tr class="button">
                <td class="btn-submit">
               
                    <a href="register.php" id="btnSubmitlogin" >register</td>
                    </a>
                <td class="btn-submit"><input type="submit"  id="btnlogin" class="btn btn-primary"name="btnSubmit" value="login"/></td>
            </tr>

         
        </table>
    </form>
    </div>
</body>
</html>