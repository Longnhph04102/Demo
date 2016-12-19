<?php
require("includes/config.php");

$malsp = $_GET['malsp'];

if($masp != ''){
	mysql_query("delete from loaisanpham where MaLSP='$malsp'");
	header("location:index.php");
	exit();
}
?>