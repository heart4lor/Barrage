<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2017/4/7
 * Time: 20:16
 */
require_once ('./connect.php');

$message = $_POST["message"];   //获取传过来的值

$qurry ="insert into barrage(message) values ('$message')";

$interqurry = mysql_query($qurry);  // 录入数据库