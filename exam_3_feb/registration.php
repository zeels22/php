<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
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
<body>
<?php require_once 'valid.php'; $validation = 0;
extract($_POST);
    ?>
<form method="POST" action="registration.php">
<label>Prefix: </label>
        <select name="account[prefix]" >
            <?php 
            foreach(fetchPrefix() as $value):
            echo "<option value='$value'";
            if(@getValuePost($prefix)==$value){echo 'selected="selected"';}
            echo">$value</option>";
            endforeach;
            ?> </select><br>
        <label>First Name: </label>
        <input type="text" name="account[fname]" value="<?php echo @getValuePost($account['fname'])?>" ><span>
            <?php 
            if(isset($_POST['extra']['submit'])){
                if(!valid($account['fname'])){
                    $validation += 1;
                    echo"*required field";
                }else{$validation += 0;}
            }?></span> <br>
        <label>Last Name: </label>
        <input type="text" name="account[lname]" value="<?php echo @getValuePost($account['lname'])?>" ><span>
            <?php 
            if(isset($_POST['extra']['submit'])){
                if(!valid($account['lname'])){
                    $validation += 1;
                    echo"*required field";
                }else{$validation += 0;} }?></span> <br>
        <label for="phoneNo">Phone No : </label>
        <input type="number" name="account[phoneNo]" value="<?php echo @getValuePost($account['phoneNo'])?>"><span>
        <?php 
            if(isset($_POST['extra']['submit'])){
                if(!valid($account['phoneNo'])){
                    $validation += 1;
                    echo"*required field";
                }elseif (strlen($account['phoneNo'])>10 || strlen($account['phoneNo'])<8) {
                    $validation +=1;
                    echo "phone no. not in range";
                }
                else{$validation += 0;}
            }?></span> <br>

        <label for="emailId">Email : </label>
        <input type="email" name="account[emailId]" value="<?php echo @getValuePost($account['emailId'])?>"><span>
        <?php 
            if(isset($_POST['extra']['submit'])){
                extract($_POST);
                extract($account);
                $sqls = "SELECT * FROm `user` WHERE `emailId` = '$emailId'";
                $check = mysqli_query($conn, $sqls);
                if(!valid($account['emailId'])){
                    $validation += 1;
                    echo"*required field";
                }elseif (!filter_var($account['emailId'], FILTER_VALIDATE_EMAIL)) {
                    $validation += 1;
                    echo "*Invalid email format";
                }elseif(mysqli_num_rows($check) > 0){
                    $validation += 1;
                    echo "*email already Exists";
                }
                else{$validation += 0;}
            }?></span> <br>

        <label >Password : </label>
        <input type="password" name="account[pass]"value="<?php echo @getValuePost($account['pass']);?>"><span>
            <?php 
                if(isset($_POST['extra']['submit'])){
                    if(!valid($account['pass'])){
                        $validation += 1;
                        echo"*required field";
                    }else{$validation += 0;}
                }?></span> <br>

        <label for="confirmPassword">Confirm Password : </label>
            <input type="password" name="extra[coPass]" id="confirmPassword"><span>
                <?php if(isset($_POST['extra']['submit'])){
                    $pass = @getValuePost($account['pass']);
                    $copass =@getValuePost($extra['coPass']);
                    if(@passCheck($pass, $copass)){
                        $validation += 0;
                    }else{
                        $validation +=1;
                        echo "Pass not match";
                    }}
                    ?>
            </span><br>
            <label>Info: </label>
        <input type="text" name="account[info]" value="<?php echo @getValuePost($account['info'])?>" ><span>
            <?php 
            if(isset($_POST['extra']['submit'])){
                if(!valid($account['info'])){
                    $validation += 1;
                    echo"*required field";
                }else{$validation += 0;}
            }?></span> <br>
            <script type="text/javascript">
                function clickButton(){
                if (document.getElementById("Agree").checked == true)
                document.getElementById("Submit").disabled = false;
                else
                document.getElementById("Submit").disabled = true;
                }
            </script>
            <input type="checkbox" id="Agree" onclick="clickButton()">hereby, I accept terms & condition <br>
            <input type="submit" id="Submit" value="Submit" disabled name="extra[submit]">
    

</form>   
<?php

if(isset($_POST['extra']['submit'])){
    
    if($validation==0)
    {
        extract($_POST);
        extract($account);
        $pass = md5($pass);
        $time = date("Y-m-d H:i:s");
        $sql = "INSERT INTO `user`(`prefix`, `fname`, `lname`, `phoneNo`, `emailId`, `pass`, `info`, `createdAt`) VALUES ('$prefix', '$fname', '$lname', '$phoneNo', '$emailId','$pass', '$info', '$time')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "done";
        }else{
            echo mysqli_error($conn);
        }
    }
}

?>
</body>
</html>