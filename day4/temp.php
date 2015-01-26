<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 26.01.15
 * Time: 15:42
 */

$vals = array(
    'one'=>false,
    'two'=>false,
    'three'=>false,
    'four'=>false,
    'five'=>false
);

//полезняшки = var_export(); вывод массивов
//move_uploaded_file() для копирования загружаемых файлов
?>

<html>
<head>
    <title>Get test</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../Styles/common.css"/>
</head>
<body>
<form action="temp.php" method="get">
    <table>
        <tr>
            <td>
                <label for="tfield">Модель</label>
            </td>
            <td>
                <input type="text" name="tfield" value=<?=$_GET['tfield']?> />
            </td>
        </tr>
        <tr>
            <td>
                <label for="list">Кол-во</label>
            </td>
            <td>
                <select name="list" id="list">
                    <option value="1" <?=($_GET['list']==1)?'selected':''?>>Один</option>
                    <option value="2" <?=($_GET['list']==2)?'selected':''?>>Два</option>
                    <option value="3" <?=($_GET['list']==3)?'selected':''?>>Три</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Подарок
            </td>
            <td>
                <input type="checkbox" name="chbox1" value="Чехол" <?=($_GET['chbox1'])?'checked':''?> />Чехол
                <input type="checkbox" name="chbox2" value="Наушники"<?= ($_GET['chbox2'])?'checked':''?>/>Наушники
            </td>
        </tr>
        <tr>
            <td>
                <label for="radio">
                    Есть 18?
                </label>
            </td>
            <td>
                <input type="radio" name="radio" value="Да" <?= ($_GET['radio']=='Да')?'checked':''?>/>Да
                <input type="radio" name="radio" value="Нет" <?= ($_GET['radio']=='Нет')?'checked':''?>/>Нет
            </td>
        </tr>
        <tr>
            <td>
                Представительства
            </td>
            <td>
                <select name="multi[]" size='5' id="multi" multiple>
                        <option value="one" <?=($item=='one')?'selected':''?>>Николаев</option>
                        <option value="two" <?=($item=='two')?'selected':''?>>Херсон</option>
                        <option value="three" selected>Одесса</option>
                        <option value="four">Винница</option>
                        <option value="five">Киев</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="area">
                    Адрес доставки
                </label>
            </td>
            <td>
                <textarea name="area" id="area" cols="30" rows="10">Улица Садовая, 56</textarea>
            </td>
        </tr>
        <tr>
           <td>
               <input type="submit" value="Отправить"/>
           </td>
        </tr>
    </table>
</form>
</body>
</html>

