<?php

session_start();

include('./DataBase.php');
$db = new Database();
$db->connect();

if ($_POST['add_rec'] == 'Добавить пистолеты и револьверы') {
    echo '<script type="text/javascript">
window.location = "add_rec.php?type=1";
</script>';
}

if ($_POST['add_rec'] == 'Добавить пистолеты-пулеметы') {
    echo '<script type="text/javascript"> 
window.location = "add_rec.php?type=2";
</script>';
}

if ($_POST['add_rec'] == 'Добавить винтовки') {
    echo '<script type="text/javascript">
window.location = "add_rec.php?type=3";
</script>';
}

if ($_POST['add_rec'] == 'Добавить автоматы, штурм.винтовки') {
    echo '<script type="text/javascript">
window.location = "add_rec.php?type=4";
</script>';
}

if ($_POST['add_rec'] == 'Добавить снайперские винтовки') {
    echo '<script type="text/javascript">
window.location = "add_rec.php?type=5";
</script>';
}

if ($_POST['add_rec'] == 'Добавить дробовики') {
    echo '<script type="text/javascript">
window.location = "add_rec.php?type=6";
</script>';
}

if ($_POST['add_rec'] == 'Добавить пулеметы') {
    echo '<script type="text/javascript">
window.location = "add_rec.php?type=7";
</script>';
}

if ($_POST['add_rec'] == 'Добавить травматическое оружие') {
    echo '<script type="text/javascript">
window.location = "add_rec.php?type=8";
</script>';
}

if ($_POST['add_rec'] == 'Пользователи') {
    echo '<script type="text/javascript">
window.location = "Users.php";
</script>';
}



if ($_POST['exit'] == 'Выход') {
    unset($_SESSION['user']);
    unset($_SESSION['type_user']);

echo '<script type="text/javascript">
window.location = "index.php";
</script>';
   
}

if ($_POST['autoriz_btn'] == 'Регистрация') {
    echo '<script type="text/javascript">
window.location = "reg.php";
</script>';
} else {

    $res = $db->select('user');

    while ($r = mysql_fetch_array($res)) {
        if ($_POST['login'] == $r['login']) {
            $_SESSION['user'] = $_POST['login'];
            $_SESSION['type_user'] = $r['type'];
        }
    }
    echo '<script type="text/javascript">
window.location = "' . $_SERVER["HTTP_REFERER"] . '"
</script>';
}
?>