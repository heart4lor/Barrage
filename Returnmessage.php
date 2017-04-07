<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2017/4/7
 * Time: 20:16
 */

require_once ('./connect.php');

$qurry = mysql_query("select * from barrage");
$num =  mysql_num_rows($qurry);

$randnum = rand(1,$num);

$select = "select message from barrage where id = $randnum";
$message = mysql_query($select);
$barrage = mysql_fetch_row($message);
print_r(mysql_fetch_row($message)) ;

foreach ($barrage as $key);
