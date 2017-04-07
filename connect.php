<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2017/4/7
 * Time: 20:09
 */

require_once ('config.php');    // 引入文件

$con = mysql_connect(HOST,USER,PASSWORD);  // 连接数据库  不需要改动
mysql_select_db('barrage');    //数据库 barrage
mysql_query("set names utf8");  // UTF-8

