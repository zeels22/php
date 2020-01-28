<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <style>
    label{
        font-size: large;
        display: inline-flex;   
        width: 120px;
        padding: 2px;
        margin: 2px;
    }
    </style>
</head>

<body>
    <?php require_once 'formFunc.php' ;
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    ?>
        <form action="Regiform.php" method="POST">
            <div class="Acc Info">
            <fieldset><legend>Account Info</legend>
                <?php $prefix = ['Mr','Dr','Miss']?>
                <label>Name: </label>
                <select name="account[prefix]" >
                    <?php foreach($prefix as $value):
                    echo "<option value='$value'";
                    if(@getValues('account','prefix')==$value){echo 'selected="selected"';}
                    echo">$value</option>";
                    endforeach;
                    ?>
                </select>
                <input type="text" name="account[fname]" placeholder="First Name" value="<?php echo getValues('account','fname');?>" required>
                <input type="text" name="account[lname]" placeholder="Last Name" value="<?php echo getValues('account','lname');?>" required><br>
                <label for="dateOfBirth">Date Of Birth : </label>
                    <input type="date" name="account[dateOfBirth]" id="dateOfBirth" value="<?php echo getValues('account','dateOfBirth');?>"><br>
                <label for="phoneNo">Phone No : </label>
                    <input type="number" name="account[phoneNo]" id="phoneNo" value="<?php echo getValues('account','phoneNo');?>" required><br>
                <label for="emailId">Email : </label>
                    <input type="email" name="account[emailId]" id="emailId" value="<?php echo 
                    getValues('account','emailId');?>" required><span>

                            <?php 
                            $email = test_input(getValues('account','emailId'));
                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            echo "Invalid email format";
                            }?></span>
                    <br>
                <label for="password">Password : </label>
                    <input type="password" name="account[pass]" id="password" value="<?php echo getValues('account','pass');?>" required><br>
                <label for="confirmPassword">Confirm Password : </label>
                    <input type="password" name="account[coPass]" id="confirmPassword" required><span>
                        <?php
                         $pass = getValues('account','pass');
                         $copass = getValues('account','coPass');
                         if(isset($_POST['submit'])){
                             if($pass != $copass){
                                echo "Pass Not Match";
                             }
                         }
                         ?>
                    </span><br>
            </fieldset>
            </div>
            <div class="addInfo">
                <fieldset>
                <legend>Address Info</legend>
                <label for="address1">Address Line 1 : </label>
                    <input type="text" name="addr[address1]" id="address1" required><br>
                <label for="address2">Address Line 2 : </label>
                    <input type="text" name="addr[address2]" id="address2" ><br>
                <label for="company">Company : </label>
                    <input type="text" name="addr[company]" id="company" ><br>
                <label for="city">City : </label>
                    <input type="text" name="addr[city]" id="city" ><br>
                <label for="state">State : </label>
                    <input type="text" name="addr[state]" id="state" ><br>
                
                    <?php $country = ['India','USA','UK'];?>
                <label>Country</label>
                <select name="addr[country][]" multiple><?php 
                 $countryArray = getValues('addr','country');
                    foreach($country as $value):
                        echo "<option value='$value'";
                        if(@in_array($value,$countryArray)){echo 'selected="selected"';}
                        echo ">$value</option>";
                    endforeach;
                    ?>
                </select>
            </fieldset>
        </div>
        <h3><input type="checkbox" id="otherInfo" onclick="myFunction()"> Other Information</h3>
        
        <div id="otherInformation">
            <fieldset>
                <legend>Other Information</legend>
                <label for="descYourSelf">Describe YourSelf : </label>
                <textarea name="descYourSelf" name="other[descYourSelf]" cols="20" rows="3"></textarea><br>
                <label for="profileImage">Profile Image : </label>
                <input type="file" name="profileImage" id="profileImage"><br>
                <label for="certificateFile">Certificate Upload : </label>
                <input type="file" name="certificateFile" id="certificateFile"><br>

                <label>Experience: </label>
                <?php $exp = ['less than 1 year','1to2 year','2to5 year','5to10 year','gt10 year'];?>
                <?php foreach($exp as $value):
                echo'<input type="radio" name="other[exp]" value="'.$value.'" ';
                if(getValues('other','exp')==$value){echo 'checked = "checked"';}
                echo ">$value";
                endforeach;?><br>

                <label>unique clients?</label>
                <?php $client = ['1to5','6to10','10to15','15+'];?>
                <select name="other[clientSee]" >
                    <?php foreach($client as $value):
                    echo "<option value=$value ";
                    if(getValues('other','clientSee')==$value){echo 'selected="selected"';}
                    echo ">$value</option>";
                    endforeach; ?>
                </select><br>

                <label>Contact Via: </label>
                    <?php $contact = ['POST','SMS','Email','Phone'];
                    $contactArray = getValues('other','contact');
                    foreach($contact as $value):
                    echo'<input type="checkbox" name="other[contact][]" value="'.$value.'" ';
                    if(@in_array($value,$contactArray)){echo 'checked = "checked"';}
                    echo ">$value";
                    endforeach;?><br>

                <label>Hobbies </label>
                <?php $hobby = ['Sports','Reading','Music','Gaming'];?>
                <?php 
                $hobbyArray = getValues('other','hobby');
                foreach($hobby as $value):
                echo'<input type="checkbox" name="other[hobby][]" value="'.$value.'" ';
                if(@in_array($value,$hobbyArray)){echo 'checked = "checked"';}
                echo ">$value";
                endforeach;?><br>
            </fieldset>
        </div>


            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>