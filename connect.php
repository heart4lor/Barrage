
<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2017/4/7
 * Time: 20:09
 */

$mydb = new mysqli('localhost', 'root', 'isnn926799', 'danmu');

$sql = "INSERT INTO danmu (message) VALUES ('$_POST[message]')";
if ($mydb->query($sql) == TRUE)
{
    require_once ('successfully.php');
}
else
{
    require_once ('failed.php');
}
$mydb->close();
?>
