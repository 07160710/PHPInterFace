<?php
    header("Content-type:text/html;charset=utf-8");
	include_once("conn.php");
	$sql = "select * from tb_course";
	$r = mysql_query($sql);
	$allkm = array();
	$result = array();
	while($row = mysql_fetch_array($r)){
			$result['id']=$row['km_id'];
			$result['km_name']=$row['km_name'];
			$allkm[] = $result;
		}
	echo json_encode($allkm);
?>