<?php

    session_start();
    if (!isset($_SESSION["image"])) {
        $_SESSION["image"] = array();  
    }
    if ( move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/" . $_FILES["fileToUpload"]["name"])) {
        echo "The file has been uploaded.";
       
        array_push($_SESSION['image'], $_FILES["fileToUpload"]['name']);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
    <div class="header">
        <h3>Image Gallary</h3>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, distinctio
        <form action="" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload"><br>
            <input type="submit" value="Upload Image" name="submit">
        </form>

        <?php
            // var_dump( $pic);
            // echo 'ggggg'.$files;
            // echo $_SESSION["image"];
            print_r( $_SESSION);
        foreach($_SESSION["image"] as $key => $sir){
            // var_dump($sir);
            // echo $sir;
            echo "<div style='width:80%'><img style='height:200px; float:left; margin-left:3%;' src='uploads/$sir'></div>";
            
        }
        // echo '<pre>';
        // print_r($_SESSION);
        // echo '</pre>';
        ?>
    </div>
</body>

</html>





















<!-- 
// if(isset($_FILES["fileToUpload"])){
//     $uploadOk =1;
//     print_r($_FILES);
//     if ($_FILES["fileToUpload"]["size"] > 200000) {
//         echo "Sorry, your file is too large.";
//         $uploadOk = 0;
//       }
  
//     if ($uploadOk==1 && move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"uploads/".$_FILES["fileToUpload"]["name"])) {
//         echo "The file has been uploaded.";
//     } else {
//         echo "Sorry, there was an error uploading your file.";
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="heading">
        <h3>Image Gallary</h3>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, distinctio.
        <form action="" method="post" enctype="multipart/form-data">
        
            <input type="submit" value="Upload Image" name="submit">
        </form>
        <?php
        ?>
    </div>
</body>
</html> -->