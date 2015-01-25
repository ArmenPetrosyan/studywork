<?php

for($i = 0; $i< count($_FILES['upload']['name']); $i++){
    $upddir = './files/';
    $updfile = $upddir.basename($_FILES['upload']['name'][$i]);
    if(copy($_FILES['upload']['tmp_name'][$i],$updfile)){
        echo "File has been loaded succesfully<br>";
    }else{
        echo "Sorry, guy(!<br>";
    }
}
