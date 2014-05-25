<?php

session_start();


header("Content-Type: text/html;charset=utf-8");

$id = $_GET["id"];
$table = $_GET["table"];
$type = $_GET["type"];
include('./DataBase.php');
$db = new Database();
$db->connect();

$table = $_GET["table"];
$id = $_GET['id'];
$name = $_POST['name'];
$calibr = $_POST['calibr'];
$weight = $_POST['weight'];
$length = $_POST['length'];
$capacity = $_POST['capacity'];
$description = $_POST['description'];

echo
$table . "<br>" .
 $id . "<br>" .
 $name . "<br>" .
 $calibr . "<br>" .
 $weight . "<br>" .
 $length . "<br>" .
 $capacity . "<br>" .
 $description . "<br>";



$f = "UPDATE `" . $table . "` SET
        `name` = '" . $name . "', 
        `calibr` = '" . $calibr . "', 
        `weight` = '" . $weight . "', 
        `length` = '" . $length . "', 
        `capacity` = '" . $capacity . "', 
        `description` = '" . $description . "' 
        WHERE `id` = " . $id . ";";



$query = mysql_query($f);

echo $f;
echo "<br>";
echo "<br>";

if ($query) {
    echo "true";
} else {
    echo "false";
}


echo '<script type="text/javascript">
window.location = "index.php";
</script>';
