<?php 
session_start();
include("phpconf.php");
include("func.php");
conDB();
?>

<?php

$hn = $_GET['hn'];
$vn = $_GET['vn'];
$vstdate = $_GET['vstdate'];

if($hn !='' and $vn !='' and $vstdate !=''){
	
	$sql = "update opitemrece set qty = 0,paidst='03' where hn='$hn' and vn='$vn' and vstdate='$vstdate' and icode = '3008183'
	 limit 1 ";

	$result=ResultDB($sql);
	
	if($result) {
		echo "<center><h3>Update Data Complete</h3></center>";
	} else {
		echo "<center><h3>Error: Not Update Data</h3></center>";
	}

}


?>