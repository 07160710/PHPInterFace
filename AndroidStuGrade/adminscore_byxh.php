<?php 
    header("content-type:text/html;charset=utf-8");
	include_once("conn.php");
	if(isset($_GET['tid'])){
		$tid= $_GET['tid'];
		$xh = $_GET['xh'];
		$sql = "select d.xm,c.km_name,a.cj from ";
		$sql =$sql."tb_grade a,tb_term b,tb_course c,tb_stuinf d";
		$sql =$sql." where a.tid = b.id and a.kid = c.km_id and b.id='$tid' and a.xh=d.xh and a.xh='$xh'";
		$r = mysql_query($sql);
		$score = array();
		$per = array();
		while($row = mysql_fetch_array($r)){
			$per['xm'] = $row['xm'];
			$per['km'] = $row['km_name'];			
			$per['cj']= $row['cj'];
			$score[] = $per;
		}
		echo json_encode($score);
	}
?>