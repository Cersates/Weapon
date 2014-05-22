<?php

$id = $_GET["id"];
$table = $_GET["table"];
include('./DataBase.php');
$db = new Database();
$db->connect();

$delete = 'DELETE FROM  ' . $table . ' WHERE ' . "id = " . $id;
$del = mysql_query($delete);

echo $table ." ___ ".$id;

echo '<script type="text/javascript">
window.location = "index.php";
</script>';
