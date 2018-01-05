<?php
    header("Content-type:text/html;charset=utf-8");
	include_once("conn.php");
	$sql = "select * from tb_class";
	$r = mysql_query($sql);
	$allclass = array();
	$result = array();
	while($row = mysql_fetch_array($r)){
			$result['id']=$row['id'];
			$result['class_name']=$row['class_name'];
			$allclass[] = $result;
		}
	echo json_encode($allclass);
?>