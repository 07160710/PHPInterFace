<?php
	header("Content-type:text/html;charset=utf-8");
	include_once("conn.php");
		$oldpassword = $_GET["oldpassword"];
		$newpsd = $_GET["newpassword"];
		$repass = $_GET["repassword"];
		$user = $_GET["user"];
		$modifypsd = false;
		$sql="";
		$json=array();
		$sql = "select * from tb_user where user='$user' and pwd='$oldpassword'";
		$r = mysql_query($sql);
		if(mysql_num_rows($r) > 0){
			if($newpsd == $repass){
				$upd = "update tb_user set pwd = '$newpsd' where user='$user'";
				$result = mysql_query($upd);
				    $json["modifypsd"] = "true";
				}else{
					$json["modifypsd"] = "false";
				}
			}else{
			$json["modifypsd"] = "false";
		}
		echo json_encode($json);
?>