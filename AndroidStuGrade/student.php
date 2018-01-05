<?php
header("content-type:text/html;charset=utf-8");
include_once("conn.php");
if(isset($_GET['xh'])){
	$xh = $_GET['xh'];
	$sql="select a.xm,a.sex,b.class_name from tb_stuinf a,tb_class b ";
	$sql = $sql."where a.class_id=b.id and xh='$xh'";
	$r = mysql_query($sql);
	$student = array();
	$per = array();
	while($row=mysql_fetch_array($r)){
		$per['xm'] = $row['xm'];
		if($row['sex'] == 0){
			$per['sex'] = "男";
		}else{
			$per['sex'] = "女";
		}
		$per['class'] = $row['class_name'];
		$student[] = $per;
	}
	echo json_encode($student);
}
?>