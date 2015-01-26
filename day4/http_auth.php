<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 26.01.15
 * Time: 17:34
 */

if(!isset($_SERVER['PHP_AUTH_USER'])){
    header('WWW-Authenticate: Basic realm=site');
    header('HTTP/1.0 401 Unauth');
    die();
}else{
    if(
        ('armen' != $_SERVER['PHP_AUTH_USER']) || ('qwe' != $_SERVER['PHP_AUTH_PW'])
    ){
        header('WWW-Authenticate: Basic realm="My site"');
        header('HTTP/1.0 401 Unauth');
        die();
    }
}

echo '<pre>';
var_export($_SERVER);
