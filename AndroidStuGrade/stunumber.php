<?php
header("content-type:text/html;charset=utf-8");
include_once("conn.php");
$sql = "select distinct xh from tb_term";
$r = mysql_query($sql);
$result = array();
while($row = mysql_fetch_array($r)){
	$result[]=$row[0];
}
echo json_encode($result);
?>