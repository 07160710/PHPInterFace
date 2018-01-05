<?php
    header("Content-type:text/html;charset=utf-8");
	include_once("conn.php");
	$sql = "select * from tb_term";
	$r = mysql_query($sql);
	$allterm = array();
	$result = array();
	while($row = mysql_fetch_array($r)){
			$result['id']=$row['id'];
			$result['term']=$row['term_year'];
			$result['termno']=$row['term_No'];
			$allterm[] = $result;
		}
	echo json_encode($allterm);
?>