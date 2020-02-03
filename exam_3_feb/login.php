<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <style>
    label{
        display: inline-flex;
        width: 160px;
    }
    span{
        color: red;
    }
    </style>
</head>
<body><?php require 'valid.php';if(isset($_POST)){extract($_POST);}?>

    <form action="login.php" method="POST">
        <h3>Login</h3>
        <label>Email</label><br>
        <input type="email" name="loginemail" value="<?php echo @getValuePost($loginemail)?>"><span></span><br>
        <label>Password</label><br>
        <input type="password" name="loginpass"><span></span><br><br>
        <input type="submit" name="submit" value="login">
        <a href="registration.php">Registration</a>
    </form>
    <?php 
        if(isset($_POST['submit'])){
            extract($_POST);
            
            $loginpasses = md5($loginpass);
            
            $sql = "SELECT `emailId`, `pass` FROm `user` WHERE `emailId` = '$loginemail'";
            $results = mysqli_query($conn, $sql);
            if (mysqli_num_rows($results) > 0) {
                $row = mysqli_fetch_assoc($results);
                $userpass = $row['pass'];
                $useremail = $row['emailId'];
                if($loginemail == $useremail && $loginpasses == $userpass){
                    echo"succes";
                    header('Location: addBlogPost.php');
                }else{
                    echo "<b><span> Invalid Email-password</span><b>";
                }
             } else{
                
                
                echo "<script>alert('user not found');</script>";
             }
        }
    ?>
</body>
</html>
