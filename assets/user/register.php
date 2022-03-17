<?php



require_once('../../data/connect.php');
$username  ='';
$loginname = '';
$password ='';
if(!empty($_POST)){
    $username= $_POST['username'];
    $loginname= $_POST['loginname'];
    $password = $_POST['password'];  
    if($username != '' && $loginname != '' && $password != ''){

      $sql = "INSERT INTO `users` (username,loginName,password) VALUES ('$username', '$loginname','$password');";
      execute($sql);
     
     var_dump($sql);
     header('Location:login.php');
      die();
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
    <h2>Register</h2>
    <form method="POST" action="">
        <table>
            <tr>
                <td>username</td>
                <td><input type="text" name="username" size="30" placeholder="Account name"></td>
            </tr>
            <tr>
                <td>loginname</td>
                <td><input type="text" name="loginname" size="30" placeholder="Fullname"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" size="30" placeholder="Password"></td>
            </tr>
            <tr>
                <td>Repassword</td>
                <td><input type="password" name="repassword" size="30" placeholder="Repassword"></td>
                <tr class="button">
                <td class="btn-submit">
               
                    <a href="login.php" id="btnSubmitlogin" >login</td>
                    </a>
                <td class="btn-submit"><input type="submit"  id="btnlogin" class="btn btn-primary"name="btnSubmit" value="register"/></td>
            </tr>

        </table>
    </form>
    </div>
</body>
</html>