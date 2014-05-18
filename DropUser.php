<?php

$id = $_GET["id"];
include('./DataBase.php');
$db = new Database();
$db->connect();

$delete = 'DELETE FROM  user WHERE ' . "id = " . $id;
$del = mysql_query($delete);

echo '<script type="text/javascript">
window.location = "Users.php";
</script>';
