<?php 
session_start();
include("phpconf.php");
include("func.php");
conDB();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620">
<title>- - �к��Թ����� | <?php echo "&nbsp;".$Hospname."&nbsp;"; ?> | - - �ʹ����Ѻ��ԡ�� -> ������� (��Сѹ�ѧ��) - - |</title>
<style type="text/css">
<!--
body {  margin: 0px  0px; padding: 0px  0px}
body{font-family:MS Sans Serif;font-size:10pt}
table,td{font-family:MS Sans Serif;font-size:10pt}
form{font-family:MS Sans Serif;font-size:10pt}
-->
</style>
<?php
//set theme
print "<link href='css/$Theme.css' rel='stylesheet' type='text/css'>";
?>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
</head>
<?php
if (!$_SESSION["ip_Log"] and !Check_Online(get_ip())){ //check  ->off line
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='1;  URL=index.php'>";
}else{ //on line

?>
<body>
<table width="1024" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="927" height="276" align="center">
	  <table width="1010" cellpadding="0" cellspacing="0" align="center">
        <tr>
          <td colspan="2" valign="top">
            <?php if (Check_Online(get_ip()) and $Header=="N") {} else {include("header.inc");} ?>
          </td>
        </tr>
        <tr>
          <td width="659" height="24" valign="middle" background="img_mian/bgcolor.gif" bgcolor="#3399CC"><?php include("manu.inc"); ?>
          </td>
          <td width="139" align="left" valign="bottom" background="img_mian/bgcolor.gif" bgcolor="#3399CC">&nbsp; </td>
        </tr>
        <tr>
          <td height="177" colspan="2" align="center" valign="top" class="td-left"><br>
              <table width="1019" border="0" cellpadding="0" cellspacing="0" class="bd-external">
                <tr align="center" bgcolor="#99CCFF">
                  <td height="24" colspan="2" background="img_mian/bgcolor2.gif" class="headmenu"> ��Сѹ�ѧ���������</td>
                </tr>
                <tr align="center">
           <td colspan="2" valign="top">
<form action="<?php $PHP_SELF ?>" method="get" name="f_select_dmy">
		   <table width="360" border="0" cellspacing="2" cellpadding="1">
             <tr align="center">
               <td colspan="3"><font color="green"><b><u>���͡��ǧ����</u></b></font></td>
               </tr>
             <tr>
               <td width="78">
			<?php
				print"�ѹ���&nbsp;";
				print"<select name='sd1' id='Txt-Field'>";
				if($sd1<>""){print"<option value='$sd1'>$sd1</option>";}
					for($i=1;$i<=31;$i++){
						print"<option value='$i'>$i</option>";
					}
				print"</select>"; 
				?>
				 </td>
               <td width="129">
			<?php
				print"&nbsp;��͹&nbsp;";
				print"<select name='sm1' id='Txt-Field'>";
				if($sm1<>""){print"<option value='$sm1'>".change_month_isThai($sm1)."</option>";}
					for($i=1;$i<=12;$i++){
						print"<option value='$i'>".change_month_isThai($i)."</option>";
					}
				print"</select>"; 
				?>
			   </td>
               <td width="135">
				<?php
				print"&nbsp;��&nbsp;";
				$sqlSyear="select   DISTINCT YEAR(vstdate) as s_year  from dtmain group by  vstdate desc  ";
				$result=ResultDB($sqlSyear);//echo mysql_num_rows($result);
				print"<select name='sy1'  id='Txt-Field'>";
				if($sy1<>""){print"<option value='$sy1'>".($sy1+543)."</option>";}
					 if(mysql_num_rows($result)>0){
						for($i=0;$i<mysql_num_rows($result);$i++){
						$rs=mysql_fetch_array($result);
						print "<option value='".$rs['s_year']."'>".($rs['s_year']+543)."</option>";
						}										    
					}
					print"</select>";
	   		?>&nbsp;&nbsp;&nbsp;&nbsp;	�֧		   </td>
               </tr>
             <tr>
               <td><?php
				print"�ѹ���&nbsp;";
				print"<select name='sd2' id='Txt-Field'>";
				if($sd2<>""){print"<option value='$sd2'>$sd2</option>";}
					for($i=1;$i<=31;$i++){
						print"<option value='$i'>$i</option>";
					}
				print"</select>"; 
				?></td>
               <td><?php
				print"&nbsp;��͹&nbsp;";
				print"<select name='sm2' id='Txt-Field'>";
				if($sm2<>""){print"<option value='$sm2'>".change_month_isThai($sm2)."</option>";}
					for($i=1;$i<=12;$i++){
						print"<option value='$i'>".change_month_isThai($i)."</option>";
					}
				print"</select>"; 
				?></td>
               <td>
			   <?php
				print"&nbsp;��&nbsp;";
				$sqlSyear="select   DISTINCT YEAR(vstdate) as s_year  from dtmain group by  vstdate desc  ";
				$result=ResultDB($sqlSyear);//echo mysql_num_rows($result);
				print"<select name='sy2'  id='Txt-Field'>";
				if($sy2<>""){print"<option value='$sy2'>".($sy2+543)."</option>";}
					 if(mysql_num_rows($result)>0){
						for($i=0;$i<mysql_num_rows($result);$i++){
						$rs=mysql_fetch_array($result);
						print "<option value='".$rs['s_year']."'>".($rs['s_year']+543)."</option>";
						}										    
					}
				
				print"</select>&nbsp;&nbsp;&nbsp;<input type='submit' value='Continue' id='Button'>";
	   		?>				</td>
               </tr>
           </table>
</form>

		 	</td>
                </tr>
                <tr align="center">
                  <td colspan="2">
				  
				  
				  </td>
                </tr>
                <tr>
                  <td colspan="2"><!-- end ���ҧ��ͺ���ҧ --></td>
                </tr>
                <tr align="center" valign="top">
                  <td colspan="2"> </td>
                </tr>
                <tr align="center">
                  <td colspan="2">

				  </td>
                </tr>
                <tr align="center">
                  <td colspan="2">
				  
				
			<?php
				//sql create table show
				$d1=$sy1."-".$sm1."-".$sd1;$d2=$sy2."-".$sm2."-".$sd2;//echo $d1."dd".$d2;

$sql_ipd_Socail="select p.cid,a.an,a.hn,a.vn,concat(DAY(a.regdate),'/',MONTH(a.regdate),'/',(YEAR(a.regdate)+543)) as ovst_date,concat(p.pname,p.fname,'  ',p.lname) as patient_name ";
$sql_ipd_Socail.=",s.name as sex,a.age_y,concat(a.pdx,'  ',a.dx0,'  ',a.dx1,'  ',a.dx2,'  ',a.dx3,'  ',a.dx4,'  ',a.dx5) as icd10,concat(a.op0,'  ',a.op1) as icd9,dr.name as doc_name,dr.licenseno,a.item_money ";
$sql_ipd_Socail.="from an_stat a ";
$sql_ipd_Socail.="left outer join patient p on p.hn=a.hn ";
$sql_ipd_Socail.="left outer join ovst ov on ov.vn=a.vn ";
$sql_ipd_Socail.="left outer join doctor dr on dr.code=ov.doctor ";
$sql_ipd_Socail.="left outer join sex s on s.code=a.sex ";
$sql_ipd_Socail.="where  a.pcode='A7' and a.regdate between '$d1' and  '$d2'  and a.pdx not between 'k000' and 'k089' and pdx !='o800' and pdx!= 'z370' and pdx not like 'z35%' and pdx not like 'z36%' ";
$sql_ipd_Socail.="and pdx  not in('z32','z320','z321','z33','z34','z340','z348','z349')  and pdx <>'' and pdx not like '%xx%' and pdx is not null ";
$sql_ipd_Socail.="group by a.vn order by a.regdate,a.hn ";

				$result_ipd_Socail=ResultDB($sql_ipd_Socail);//echo mysql_num_rows($resultDenService);
				if(mysql_num_rows($result_ipd_Socail)>0){
					print"<u><font color='green'><b>�ʴ������Ţͧ�ѹ��� <font color='red'>$sd1</font> ��͹ <font color='red'>".change_month_isThai($sm1)."</font> �� <font color='red'>".($sy1+543)."</font> �֧�ѹ��� <font color='red'>$sd2</font> ��͹ <font color='red'>".change_month_isThai($sm2)."</font> �� <font color='red'>".($sy2+543)."</font>";
					print"<br>�շ����� ".mysql_num_rows($result_ipd_Socail)." ��¡��</b></font></u>";
						//create row
						?><br><br>
					<table width="900" border="1" cellspacing="0" cellpadding="0" class="bd-external">
                      <tr>
                        <td height="44" align="center"><table width="900" border="0" cellpadding="1" cellspacing="1">
                          <tr class="headtable">
                            <td width="20" height="21"  align="center" background="img_mian/bgcolor2.gif">���</td>
                            <td width="90"  align="center" background="img_mian/bgcolor2.gif">�ѵû�ЪҪ�</td>
                            <td width="54" align="center"  background="img_mian/bgcolor2.gif">HN</td>
                            <td width="64" align="center"  background="img_mian/bgcolor2.gif">�Ѻ��ԡ��</td>
                            <td width="119" align="center"  background="img_mian/bgcolor2.gif">����-ʡ��</td>
                            <td width="25" align="center"  background="img_mian/bgcolor2.gif">��</td>
                            <td width="39" align="center"  background="img_mian/bgcolor2.gif">����(��)</td>
                            <td width="120" align="center"  background="img_mian/bgcolor2.gif">����ԹԨ���(ICD10)</td>
                            <td width="91" align="center"  background="img_mian/bgcolor2.gif">�ѵ����(ICD9)</td>
                            <td width="116" align="center"  background="img_mian/bgcolor2.gif">ᾷ��</td>
                            <td width="51" align="center"  background="img_mian/bgcolor2.gif">����¹</td>
                            <td width="74" align="center"  background="img_mian/bgcolor2.gif">��Һ�ԡ��</td>
                          </tr>

                          <?php
				$i=0;
			          while($i<mysql_num_rows($result_ipd_Socail)){//while
						 $rs_ipd_Socail=mysql_fetch_array($result_ipd_Socail);
					if ($bg=="#FFFFFF") { //color
						$bg="#B1C3D9";
					//$bgm="";
						}else{
						$bg="#FFFFFF";
						//$bgm="img_mian/bgcolor.gif";
						} //color
						?>
                          <tr bgcolor="<?php echo $bg;?>">
                            <td  align="center"><?php echo ($i+1); ?></td>
                            <td  align="center"><?php echo $rs_ipd_Socail['cid']; ?></td>
                            <td align="center"><?php echo $rs_ipd_Socail['hn']; ?></td>
                            <td align="right"><?php echo $rs_ipd_Socail['ovst_date']; ?></td>
                            <td align="left">&nbsp;<?php echo "<a href='patient_medication_record.php?hn=".$rs_ipd_Socail['hn']."&vn=".$rs_ipd_Socail['vn']."'>".change_misis($rs_ipd_Socail['patient_name'])."</a>"; ?></td>
                            <td align="center">
							<?php //echo $rs_ipd_Socail['sex']; 
							if($rs_ipd_Socail['sex']=="���"){echo "�.";}else{echo "�.";}
							?>
							</td>
                            <td align="center"><?php echo $rs_ipd_Socail['age_y']; ?></td>
                            <td align="left">&nbsp;<?php echo $rs_ipd_Socail['icd10']; ?></td>
                            <td align="right"><?php echo $rs_ipd_Socail['icd9']; ?></td>
                            <td align="left">&nbsp;
							<?php //echo $rs_ipd_Socail['doc_name']; 
								  if(ereg("���ᾷ��",$rs_ipd_Socail['doc_name'])){ // return true,false
								  echo str_replace("���ᾷ��","�.",$rs_ipd_Socail['doc_name']); //᷹���� ���ᾷ�� �� �. 
								  }elseif(ereg("ᾷ��˭ԧ",$rs_ipd_Socail['doc_name'])){ //false
  								  echo str_replace("ᾷ��˭ԧ","��.",$rs_ipd_Socail['doc_name']); //᷹���� ᾷ��˭ԧ �� ��. 
								  }else{
								  echo change_misis($rs_ipd_Socail['doc_name']); 
								  }
							?>
							</td>
                            <td align="center"><?php echo $rs_ipd_Socail['licenseno']; ?>							
							</td>
                            <td align="right">
							<?php 
							
							echo number_format($rs_ipd_Socail['item_money']) ; 
							?>
							</td>
                          </tr>
                          <?php
						$i++;
					} //while 
					?>
                        </table></td>
                      </tr>
                    </table>
					<?php 
					$exp_file="ipd";
					print"<br><br><img src='img_mian/excel_icon.gif' align='middle'>&nbsp;<a href='excel_export.php?sy1=$sy1&sm1=$sm1&sd1=$sd1&sy2=$sy2&sm2=$sm2&sd2=$sd2&exp_file=$exp_file'>Excel Export File</a><br><br>";
				}else{
						if($sy1<>""){print"<font color='green'><b>����բ����Ţͧ<br>�ѹ��� <font color='red'>$sd1</font> ��͹ <font color='red'>".change_month_isThai($sm1)."</font> �� <font color='red'>".($sy1+543)."</font> �֧�ѹ��� <font color='red'>$sd2</font> ��͹ <font color='red'>".change_month_isThai($sm2)."</font> �� <font color='red'>".($sy2+543)."</font></b></font>";
						}else{print"<font color='green'><b>��س����͡��ǧ���� ����Ѻ��§ҹ</b></font><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";}
				}
				?>
                  </td>
                </tr>
                <tr>
                  <td width="544">&nbsp;</td>
                  <td width="475">&nbsp;</td>
                </tr>
              </table>
              <!-- form -->
              <!-- end form --></td>
        </tr>
        <tr>
          <td height="16" colspan="2" align="center" background="img_mian/bgcolor2.gif" bgcolor="#B1C3D9">|&nbsp;<?php echo"<a href=\"javascript:history.back(-1)\">��͹��Ѻ</a>" ?>&nbsp;|</td>
        </tr>
        <tr>
          <td height="16" valign="top"><img src="img_mian/bn_03_2.gif" width="634" height="36"></td>
          <td height="16" valign="top">&nbsp;</td>
        </tr>
      </table>
	</td>
  </tr>
  <tr> 
    <td height="23">
	
	</td>
  </tr>
</table>
<?php 
}//ch online
CloseDB(); //close connect db ?>
</body>
</html>
