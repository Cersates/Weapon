<?php

session_start();

include('./DataBase.php');
$db = new Database();
$db->connect();

if ($_POST['reg'] == 'Зарегистрироватся') {

    $res = $db->select('user');

    while ($r = mysql_fetch_array($res)) {
        if ($_POST['login'] == $r['login']) {
            $_SESSION['qOk'] = 2;
        }
    }

    if ($_POST['password'] == $_POST['password2'] && $_SESSION['qOk'] != 2) {
        $db->insert('user', array(0, $_POST['login'], $_POST['password']), "type,login,password");
        $_SESSION['qOk'] = 1;
        echo '<script type="text/javascript">
		window.location = "' . $_SERVER["HTTP_REFERER"] . '"
		</script>';
    } else {
        $_SESSION['qOk'] = 3;
        echo '<script type="text/javascript">
		window.location = "' . $_SERVER["HTTP_REFERER"] . '"
		</script>';
    }
}
?>