<meta charset="utf-8" xmlns="http://www.w3.org/1999/html"/>
<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 26.01.15
 * Time: 17:20
 */
if(isset($_FILES['file'])){
    $tempdir = "d:/tempos/";
    $dir = $tempdir.basename($_FILES['file']['name']);
    if(move_uploaded_file($_FILES['file']['name'],$dir)){
        echo "File has been loaded succesfully<br>";
    }else{
        echo "Sorry, guy(!<br>";
    }
}

?>

<form action="load.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file"/>
    <input type="submit" value="send"/>
</form>