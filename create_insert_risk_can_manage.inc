<?php
$sqlc = "SELECT * FROM  risk_can_manage "; //�礤�Ң����ŷ�����Ҩҡ�����
				$result = mysql_db_query($DBName,$sqlc)
				or $chk='N';
				// �Ҩӹǹ�á���촢�����
if($chk=='N'){
$sqlcrete ="CREATE TABLE `risk_can_manage` (
`idm` INT default NULL AUTO_INCREMENT ,
`mname` TEXT NOT NULL ,
PRIMARY KEY ( `idm` )) CHARACTER SET = tis620; ";
		$result = mysql_db_query($DBName,$sqlcrete)
		or die("�������ö���ҧ���ҧ risk_can_manage ��".mysql_error());
//row1		
$sql1="INSERT INTO `risk_can_manage` ( `idm` , `mname`)
VALUES ('' , '����ա�èѴ���') ";
		$result = mysql_db_query($DBName,$sql1)
		or die("�������ö����������㹵��ҧ risk_can_manage ��".mysql_error());
//row2		
$sql2="INSERT INTO `risk_can_manage` ( `idm` , `mname`)
VALUES ('' , '�Ѵ����¡�û�Ъ�����ᨧ') ";
		$result = mysql_db_query($DBName,$sql2)
		or die("�������ö����������㹵��ҧ risk_can_manage ��".mysql_error());

//row3		
$sql3="INSERT INTO `risk_can_manage` ( `idm` , `mname`)
VALUES ('' , '�Ѵ����¡���աԨ�����Ѳ��') ";
		$result = mysql_db_query($DBName,$sql3)
		or die("�������ö����������㹵��ҧ risk_can_manage ��".mysql_error());

//row4		
$sql4="INSERT INTO `risk_can_manage` ( `idm` , `mname`)
VALUES ('' , '�Ѵ����¡�û���ҹ�ҹ�ͧ������ԪҪվ���͡�û���ҹ�ҹ�ͧ��С�����ú����ä�������§') ";
		$result = mysql_db_query($DBName,$sql4)
		or die("�������ö����������㹵��ҧ risk_can_manage ��".mysql_error());

 }//n

?>