<?php
$sqlc = "SELECT * FROM  risk_typelist1 "; //�礤�Ң����ŷ�����Ҩҡ�����
				$result = mysql_db_query($DBName,$sqlc)
				or $chk='N';
				// �Ҩӹǹ�á���촢�����
if($chk=='N'){
$sqlcrete ="CREATE TABLE `risk_typelist1` (
`idl1` INT default NULL AUTO_INCREMENT ,
`list_name1` TEXT NOT NULL ,
PRIMARY KEY ( `idl1` ) 
) TYPE = MYISAM CHARACTER SET = tis620; ";
		$result = mysql_db_query($DBName,$sqlcrete)
		or die("�������ö���ҧ���ҧ risk_typelist1 ��".mysql_error());
//row1		
$sql1="INSERT INTO `risk_typelist1` ( `idl1` , `list_name1`)
VALUES ('' , '��кǹ����ѡ�Ҿ�Һ��') ";
		$result = mysql_db_query($DBName,$sql1)
		or die("�������ö����������㹵��ҧ risk_typelist1 ��".mysql_error());
//row2		
$sql2="INSERT INTO `risk_typelist1` ( `idl1` , `list_name1`)
VALUES ('' , '�ĵԡ�����ԡ��') ";
		$result = mysql_db_query($DBName,$sql2)
		or die("�������ö����������㹵��ҧ risk_typelist1 ��".mysql_error());
//row3		
$sql3="INSERT INTO `risk_typelist1` ( `idl1` , `list_name1`)
VALUES ('' , '�Ҥ��ʶҹ���,����Ǵ������Ф�����ʹ���') ";
		$result = mysql_db_query($DBName,$sql3)
		or die("�������ö����������㹵��ҧ risk_typelist1 ��".mysql_error());
//row4		
$sql4="INSERT INTO `risk_typelist1` ( `idl1` , `list_name1`)
VALUES ('' , '�к�俿��,�Ѥ�����') ";
		$result = mysql_db_query($DBName,$sql4)
		or die("�������ö����������㹵��ҧ risk_typelist1 ��".mysql_error());

//row5		
$sql5="INSERT INTO `risk_typelist1` ( `idl1` , `list_name1`)
VALUES ('' , '��û�ͧ�ѹ��ФǺ�����õԴ������ç��Һ��') ";
		$result = mysql_db_query($DBName,$sql5)
		or die("�������ö����������㹵��ҧ risk_typelist1 ��".mysql_error());

//row6		
$sql6="INSERT INTO `risk_typelist1` ( `idl1` , `list_name1`)
VALUES ('' , '������ʹ���㹡������') ";
		$result = mysql_db_query($DBName,$sql6)
		or die("�������ö����������㹵��ҧ risk_typelist1 ��".mysql_error());

//row7		
$sql7="INSERT INTO `risk_typelist1` ( `idl1` , `list_name1`)
VALUES ('' , '��ú�������оѲ�ҷ�Ѿ�ҡúؤ��') ";
		$result = mysql_db_query($DBName,$sql7)
		or die("�������ö����������㹵��ҧ risk_typelist1 ��".mysql_error());

//row8		
$sql8="INSERT INTO `risk_typelist1` ( `idl1` , `list_name1`)
VALUES ('' , '��ô����к�����ͧ���') ";
		$result = mysql_db_query($DBName,$sql8)
		or die("�������ö����������㹵��ҧ risk_typelist1 ��".mysql_error());

//row9		
$sql9="INSERT INTO `risk_typelist1` ( `idl1` , `list_name1`)
VALUES ('' , '�Է�Լ�����') ";
		$result = mysql_db_query($DBName,$sql9)
		or die("�������ö����������㹵��ҧ risk_typelist1 ��".mysql_error()); 

//row10		
$sql10="INSERT INTO `risk_typelist1` ( `idl1` , `list_name1`)
VALUES ('' , '����') ";
		$result = mysql_db_query($DBName,$sql10)
		or die("�������ö����������㹵��ҧ risk_typelist1 ��".mysql_error());
}//n

?>