<?php
	header("Content-type:text/html;charset=utf-8");
	include_once("conn.php");
		$oldpassword = $_GET["oldpassword"];
		$newpsd = $_GET["newpassword"];
		$repass = $_GET["repassword"];
		$xh = $_GET["xh"];
		$upda = false;
		$sql="";
		$json=array();
		$sql = "select * from tb_stuinf where xh='$xh' and pwd='$oldpassword'";
		$r = mysql_query($sql);
		//var_dump($sql);
		//echo mysql_num_rows($r);
		if(mysql_num_rows($r) > 0){
			if($newpsd == $repass){
				$upd = "update tb_stuinf set pwd = '$newpsd' where xh='$xh'";
				$result = mysql_query($upd);
				    $json["upda"] = "true";
				}else{
					$json["upda"] = "false";
				}
			}else{
			$json["upda"] = "false";
		}
		echo json_encode($json);
?>