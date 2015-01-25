<?php

    if(!isset($_COOKIE['counter'])){
        setcookie('counter',1);
    }else{
        setcookie('counter',++$_COOKIE['counter']);
    }
    $counter = $_COOKIE['counter'];

    if(!isset($_COOKIE[$_POST['username']])){
        setcookie($_POST['username'],$_POST['username']);
    }else{
        echo "<h2>".$_POST['username'].", you have already registered</h2>";
    }

?>
<!DOCTYPE html>
<head>
    <title>Cookies)</title>
    <meta charset="utf-8"/>
</head>
<body>
<form action="testCookie.php" method="post">
    <table class="formWrap">
        <tr>
            <td>
                <label for="username">Username</label>
            </td>
            <td>
                <input type="text" name="username"/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="passw">Password</label>
            </td>
            <td>
                <input type="password" name="passw"/>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="send"/>
            </td>
        </tr>
    </table>
</form>
<h4>You watched this site <?=$counter?> times</h4>
</body>

