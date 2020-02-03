<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    label{
        display: inline-flex;
        width: 100px;
    }
    span{
        color: red;
    }
    </style>
</head>
<body>
    <?php require_once 'valid.php'; $validation = 0;
    extract($_POST);?>
    <form action="addBlogPost.php" method="POST">
    <h3> ADD New Blog Post </h3>

    <label>Title</label>
    <input type="text" name="blog[title]" value="<?php echo @getValuePost($blog['title'])?>" ><span>
        <?php 
        if(isset($_POST['blog']['submit'])){
            if(!valid($blog['title'])){
                $validation += 1;
                echo"*required field";
            }else{$validation += 0;}
        }?></span> <br>

    <label>Content</label>
    <input type="text" name="blog[content]" value="<?php echo @getValuePost($blog['content'])?>" ><span>
        <?php 
        if(isset($_POST['blog']['submit'])){
            if(!valid($blog['content'])){
                $validation += 1;
                echo"*required field";
            }else{$validation += 0;}
        }?></span> <br>

    <label>URL</label>
    <input type="text" name="blog[url]" value="<?php echo @getValuePost($blog['url'])?>" ><span>
        <?php 
        if(isset($_POST['blog']['submit'])){
            $website = test_input($blog["url"]);
            extract($blog);
            $sqls = "SELECT * FROm `category` WHERE `url` = '$url'";
            $check = mysqli_query($conn, $sqls);
            if(!valid($blog['url'])){
                $validation += 1;
                echo"*required field";
            }elseif((!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url))){
                $validation += 1;
                echo "invalid Url";
            }elseif(mysqli_num_rows($check) > 0){
                $validation += 1;
                echo "url already exists";
            }
            else{$validation += 0;}
        }?></span> <br>
    <label>Published at</label>
    <input type="date" name="blog[date]"><br>
    <label>Catagory: </label>
    
        <select name="blog[category][]" multiple>
            <?php @extract($_POST['blog']); 
            $categoryArray = @getValuePost($blog['category']);
            foreach(fetchCategory() as $value):
                echo "<option value='$value'";
                if(@in_array($categoryArray,$value)){echo 'selected="selected"';}
                echo">$value</option>";
                endforeach;
            ?> 
        </select><br>
    <input type="submit" name="blog[submit]">
    </form>
    
</body>
</html>