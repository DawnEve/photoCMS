<?php
include_once("checksession.php");
include("header.html");
?>
<META http-equiv=Content-Type content=text/html;charset=utf-8>
<?php
$tid = $_GET[tid];
$lock_status = $_GET[lock_status];

if($lock_status==0){
include_once("../db.php");
$query="update beian_manage set lock_status = 1 where tid = $tid";
$result=mysql_db_query($DataBase, $query);
if($result){
	echo "封锁成功";
	header("location:listadmin.php");
	}else{
	echo "封锁失败";
	header("location:listadmin.php");
	}
}

if($lock_status==1){
include_once("../db.php");
$query="update beian_manage set lock_status = 0 where tid = $tid";
$result=mysql_db_query($DataBase, $query);
if($result){
	echo "解封成功";
	header("location:listadmin.php");
	}else{
	echo "解封失败";
	header("location:listadmin.php");
	}
}




?>