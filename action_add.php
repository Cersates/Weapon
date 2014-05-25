<?php

session_start();

include('./DataBase.php');
$db = new Database();
$db->connect();

if ($_GET['add'] == 1) {
    $uploaddir = 'photo/';
    $uploadfile = $uploaddir . basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
    $db->insert('pistol', array($_POST['f1'], $_POST['f2'],$_POST['f3'], $_POST['f4'],$_POST['f5'], $_POST['f6'], basename($_FILES['img']['name'])), 
            "name, calibr, weight, length, capacity, description, photo");
    $_SESSION['qOk'] = 1;
    echo '<script type="text/javascript">
		window.location = "' . $_SERVER["HTTP_REFERER"] . '"
		</script>';
}

if ($_GET['add'] == 2) {
    $uploaddir = 'photo/';
    $uploadfile = $uploaddir . basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
    $db->insert('submachine_guns', array($_POST['f1'], $_POST['f2'],$_POST['f3'], $_POST['f4'],$_POST['f5'], $_POST['f6'], basename($_FILES['img']['name'])), 
            "name, calibr, weight, length, capacity, description, photo");
    $_SESSION['qOk'] = 1;
    echo '<script type="text/javascript">
		window.location = "' . $_SERVER["HTTP_REFERER"] . '"
		</script>';
}

if ($_GET['add'] == 3) {
    $uploaddir = 'photo/';
    $uploadfile = $uploaddir . basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
    $db->insert('rifle', array($_POST['f1'], $_POST['f2'],$_POST['f3'], $_POST['f4'],$_POST['f5'], $_POST['f6'], basename($_FILES['img']['name'])), 
            "name, calibr, weight, length, capacity, description, photo");
    $_SESSION['qOk'] = 1;
    echo '<script type="text/javascript">
		window.location = "' . $_SERVER["HTTP_REFERER"] . '"
		</script>';
}

if ($_GET['add'] == 4) {
    $uploaddir = 'photo/';
    $uploadfile = $uploaddir . basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
    $db->insert('automat', array($_POST['f1'], $_POST['f2'],$_POST['f3'], $_POST['f4'],$_POST['f5'], $_POST['f6'], basename($_FILES['img']['name'])), 
            "name, calibr, weight, length, capacity, description, photo");
    $_SESSION['qOk'] = 1;
    echo '<script type="text/javascript">
		window.location = "' . $_SERVER["HTTP_REFERER"] . '"
		</script>';
}

if ($_GET['add'] == 5) {
    $uploaddir = 'photo/';
    $uploadfile = $uploaddir . basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
    $db->insert('sniper', array($_POST['f1'], $_POST['f2'],$_POST['f3'], $_POST['f4'],$_POST['f5'], $_POST['f6'], basename($_FILES['img']['name'])), 
            "name, calibr, weight, length, capacity, description, photo");
    $_SESSION['qOk'] = 1;
    echo '<script type="text/javascript">
		window.location = "' . $_SERVER["HTTP_REFERER"] . '"
		</script>';
}

if ($_GET['add'] == 6) {
    $uploaddir = 'photo/';
    $uploadfile = $uploaddir . basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
    $db->insert('shotgun', array($_POST['f1'], $_POST['f2'],$_POST['f3'], $_POST['f4'],$_POST['f5'], $_POST['f6'], basename($_FILES['img']['name'])), 
            "name, calibr, weight, length, capacity, description, photo");
    $_SESSION['qOk'] = 1;
    echo '<script type="text/javascript">
		window.location = "' . $_SERVER["HTTP_REFERER"] . '"
		</script>';
}


if ($_GET['add'] == 7) {
    $uploaddir = 'photo/';
    $uploadfile = $uploaddir . basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
    $db->insert('gun', array($_POST['f1'], $_POST['f2'],$_POST['f3'], $_POST['f4'],$_POST['f5'], $_POST['f6'], basename($_FILES['img']['name'])), 
            "name, calibr, weight, length, capacity, description, photo");
    $_SESSION['qOk'] = 1;
    echo '<script type="text/javascript">
		window.location = "' . $_SERVER["HTTP_REFERER"] . '"
		</script>';
}


if ($_GET['add'] == 8) {
    $uploaddir = 'photo/';
    $uploadfile = $uploaddir . basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
    $db->insert('travmat', array($_POST['f1'], $_POST['f2'],$_POST['f3'], $_POST['f4'],$_POST['f5'], $_POST['f6'], basename($_FILES['img']['name'])), 
            "name, calibr, weight, length, capacity, description, photo");
    $_SESSION['qOk'] = 1;
    echo '<script type="text/javascript">
		window.location = "' . $_SERVER["HTTP_REFERER"] . '"
		</script>';
}

