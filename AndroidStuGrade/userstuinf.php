<?php
    header("Content-type:text/html;charset=utf-8");
	include_once("conn.php");
	$xh = $_GET["xh"];
	$sql = "select * from tb_stuinf a,tb_class b where xh='$xh' and a.class_id = b.id";
	$r = mysql_query($sql);
	$people = array();
	$result = array();
	while ($row = mysql_fetch_array($r)) {
		$result['xh'] = $row['xh'];
		$result['xm'] = $row['xm'];
		if($row['sex'] == 0){
			$result['sex'] = "男";
		}else{
			$result['sex'] = "女";
		}
		$result['class'] = $row['class_name'];
		$people[] = $result;
	}
	echo json_encode($people);
?>