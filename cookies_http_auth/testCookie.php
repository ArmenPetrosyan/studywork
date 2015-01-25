<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 24.01.15
 * Time: 15:22
 */

if(!isset($_COOKIE['name'])){
    setcookie($_POST['name'],$_POST['pasw']);
}else{
    
}