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
extract($_POST);
    ?>
    <form action="addNewCategory.php" method="POST">
        <h3> ADD new Category </h3>
        <label>Title</label>
        <input type="text" name="category[title]" value="<?php echo @getValuePost($category['title'])?>" ><span>
            <?php 
            if(isset($_POST['category']['submit'])){
                if(!valid($category['title'])){
                    $validation += 1;
                    echo"*required field";
                }else{$validation += 0;}
            }?></span> <br>
         <label>Content</label>
        <input type="text" name="category[content]" value="<?php echo @getValuePost($category['content'])?>" ><span>
            <?php 
            if(isset($_POST['category']['submit'])){
                if(!valid($category['content'])){
                    $validation += 1;
                    echo"*required field";
                }else{$validation += 0;}
            }?></span> <br>
             <label>URL</label>
        <input type="text" name="category[url]" value="<?php echo @getValuePost($category['url'])?>" ><span>
            <?php 
            if(isset($_POST['category']['submit'])){
                $website = test_input($category["url"]);
                extract($category);
                $sqls = "SELECT * FROm `category` WHERE `url` = '$url'";
                $check = mysqli_query($conn, $sqls);
                if(!valid($category['url'])){
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
        <label>Meta Title</label>
         <input type="text" name="category[metatitle]" value="<?php echo @getValuePost($category['metatitle'])?>" ><span>
            <?php 
            if(isset($_POST['category']['submit'])){
                if(!valid($category['metatitle'])){
                    $validation += 1;
                    echo"*required field";
                }else{$validation += 0;}
            }?></span> <br>
        <label>ParentCategory: </label>
        <select name="category[parent]" >
            <?php 
            foreach(fetchCategory() as $value):
            echo "<option value='$value'";
            if(@getValuePost($parent)==$value){echo 'selected="selected"';}
            echo">$value</option>";
            endforeach;
            ?> </select><br>

        <input type="submit" name="category[submit]">
        <?php 
        if(isset($category['submit'])){if($validation == 0){
            $time = date("Y-m-d H:i:s");
            $sql = "INSERT INTO `category`(`parent_id`, `title`, `meta_title`, `url`, `content`, `created_at`)              VALUES ('4','$title','$metatitle','$url','$content', '$time')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "done";
            }else{
                echo mysqli_error($conn);
            }
        }
    }
        ?>
    

    </form>
</body>
</html>