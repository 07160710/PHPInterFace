<?php
	header("Content-type:text/html;charset=utf-8");
	include_once("conn.php");
	if(isset($_GET["user"])){
		$user = $_GET['user'];
		$pwd = $_GET['pwd'];
		$login = false;
		$sql="";
		$json=array();
		if($user == 'admin'){
			$sql = "select * from tb_user where pwd='$pwd'";
					
		}else{
			$sql = "select * from tb_stuinf where xh='$user' and pwd='$pwd'";
		}
		$r = mysql_query($sql);
		$rows=mysql_num_rows($r);
		if ($rows>0) $login=true;
		if($login){
			$json["login"]="true";
		}else{
			$json["login"]="false";
		}
		echo json_encode($json);
	}