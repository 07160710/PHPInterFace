<?php
   @mysql_connect("localhost","root","")or die("服务器不存在");
   mysql_select_db("db_androidgrade")or("数据库不存在");
   mysql_query("set names utf8");
?>