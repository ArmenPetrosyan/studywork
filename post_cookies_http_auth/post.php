<!DOCTYPE html>
<head>
    <title>Прием данных</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../Styles/common.css"/>
</head>
<body>
<ul class="stripes">
    <li>
        <h3>Текст из поля</h3>
        <?= $_POST['text']?$_POST['text']:"***empty***";?>
    </li>
    <li>
        <h3>Пароль</h3>
        <?= $_POST['passw']?$_POST['passw']:"***empty***";?>
    </li>
    <li>
        <h3>Скрытое поле</h3>
        <?= $_POST['hidden']?$_POST['hidden']:"***empty***";?>
    </li>
    <li>
        <h3>Независимые переключатели</h3>
        <?php
            if(isset($_POST['checkbox1'])){
               echo "<p>First enabled</p>";
            }
            if(isset($_POST['checkbox2'])){
                echo "<p>Second enabled</p>";
            }
            if(isset($_POST['checkbox3'])){
                echo "<p>Third enabled</p>";
            }
        ?>
    </li>
    <li>
        <h3>Зависимые переключатели</h3>
        <? if(isset($_POST['radiobutton'])) echo $_POST['radiobutton'];
            else echo "***not selected***"
        ?>
    </li>
    <li>
        <h3>Многострочное текстовое поле</h3>
        <?= $_POST['textarea']?$_POST['textarea']:"***empty***";?>
    </li>
    <li>
        <h3>Список с единственным выбором</h3>
        <?= $_POST['day_s']?$_POST['day_s']:"***empty***";?>
    </li>
    <li>
        <h3>Список с множественным выбором </h3>
        <?php
            foreach($_POST['day_m'] as $item){
                echo "<p>$item</p>";
            }
        ?>
    </li>
</ul>
</body>