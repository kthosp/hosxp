<?php 
session_start();
include("phpconf.php");
include("func.php");
conDB();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620">
<title>- - �к��Թ����� | <?php echo "&nbsp;".$Hospname."&nbsp;"; ?> | - - ���� IPD RE-ADMIT ���� 28 �ѹ - - |</title>
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
                  <td height="24" colspan="2" background="img_mian/bgcolor2.gif" class="headmenu">  ���� IPD RE-ADMIT ���� 28 �ѹ �����ä���</td>
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

/*
$sqlOpd_Socail="SELECT

a.an,a.hn,concat(p.pname,p.fname,'  ',p.lname) 
as pt_name,a.pdx,a.regdate, a.dchdate 
,a.lastvisit as lstvisit,
a.count_in_year

FROM an_stat a

LEFT OUTER JOIN patient p ON p.hn = a.hn

WHERE a.dchdate BETWEEN '$d1' AND '$d2'

AND a.lastvisit<=28 AND a.old_diagnosis = 'Y'

AND a.ward = '01'

ORDER BY a.regdate
 ";
*/



$sqlOpd_Socail="select q3.hn,concat(patient.pname,patient.fname,'  ',patient.lname) as ptname,q3.AN_new ,q3.regdate_AN_New ,q3.dcdate_AN_New ,q3.AN_Old as AN_old
 ,q3.regdate_AN_Old ,q3.dcdate_AN_Old ,q3.icd10_1,q3.ReAdmitDate

 from patient inner join 
 (select q1.hn ,q1.an as AN_new ,q1.regdate as regdate_AN_New,q1.dchdate as dcdate_AN_New,q2.an as AN_old ,q2.regdate as regdate_AN_Old 
 ,q2.dchdate as dcdate_AN_Old,q1.icd10 as icd10_1,TIMESTAMPDIFF(day,substring(q2.dchdate,1,10),substring(q1.regdate,1,10)) as ReAdmitDate

from (select ipt.hn ,ipt.an ,ipt.regdate,ipt.dchdate,iptdiag.icd10 ,iptdiag.diagtype from 

 ipt  inner join iptdiag on ipt.an = iptdiag.an where ipt.hn != ' ' and iptdiag.diagtype = '1') as q1

 inner join 

(select ipt1.hn ,ipt1.an ,ipt1.regdate,ipt1.dchdate,iptdiag1.icd10 ,iptdiag1.diagtype from ipt as ipt1 
inner join iptdiag as iptdiag1 on ipt1.an = iptdiag1.an where ipt1.hn != ' ' and iptdiag1.diagtype ='1' ) as q2
 where q1.hn = q2.hn and q1.an <> q2.an and q1.icd10 = q2.icd10 and 
TIMESTAMPDIFF(day,substring(q2.dchdate,1,10),substring(q1.regdate,1,10)) > 0 and 
TIMESTAMPDIFF(day,substring(q2.dchdate,1,10),substring(q1.regdate,1,10)) <= 28 and 

q1.regdate between '$d1' and '$d2' ) as q3  on q3.hn = patient.hn ";







				
				$resultOpd_Socail=ResultDB($sqlOpd_Socail);//echo mysql_num_rows($resultDenService);
				if(mysql_num_rows($resultOpd_Socail)>0){
					print"<u><font color='green'><b>�ʴ������Ţͧ�ѹ��� <font color='red'>$sd1</font> ��͹ <font color='red'>".change_month_isThai($sm1)."</font> �� <font color='red'>".($sy1+543)."</font> �֧�ѹ��� <font color='red'>$sd2</font> ��͹ <font color='red'>".change_month_isThai($sm2)."</font> �� <font color='red'>".($sy2+543)."</font>";
					print"<br>�շ����� ".mysql_num_rows($resultOpd_Socail)." ��¡��</b></font></u>";
						//create row
						?><br><br>
					<table width="900" border="1" cellspacing="0" cellpadding="0" class="bd-external">
                      <tr>
                        <td height="44" align="center"><table width="900" border="0" cellpadding="1" cellspacing="1">
                          <tr class="headtable">
                            
							<td width="20" height="21"  align="center" background="img_mian/bgcolor2.gif">���</td>
                          
                            <td  align="center"  background="img_mian/bgcolor2.gif">HN</td>

							<td  align="center"  background="img_mian/bgcolor2.gif">����-ʡ��</td>

							<td  align="center"  background="img_mian/bgcolor2.gif">AN ����</td>

							<td align="center"  background="img_mian/bgcolor2.gif">�ѹ�Ѻ����</td>

							<td  align="center"  background="img_mian/bgcolor2.gif">�ѹ Discharge ����</td>


							<td  align="center"  background="img_mian/bgcolor2.gif">AN ���</td>

							<td  align="center"  background="img_mian/bgcolor2.gif">�ѹ�Ѻ���</td>

							<td align="center"  background="img_mian/bgcolor2.gif">�ѹ Discharge ���</td>

							<td  align="center"  background="img_mian/bgcolor2.gif">icd10</td>

							<td  align="center"  background="img_mian/bgcolor2.gif">�ѹ re-admit</td>


					
                         
                          </tr>
                          <?php
				$i=0;
			          while($i<mysql_num_rows($resultOpd_Socail)){//while
						 $rsOpd_Socail=mysql_fetch_array($resultOpd_Socail);
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
                           
                            <td align="center"><?php echo $rsOpd_Socail['hn']; ?></td>

							 <td ><?php echo $rsOpd_Socail['ptname']; ?></td>
                            
                            <td align="left"><?php echo $rsOpd_Socail['AN_new']; ?></td>

							 <td align="center"><?php echo $rsOpd_Socail['regdate_AN_New']; ?></td>

							<td align="center">
								<?php echo $rsOpd_Socail['dcdate_AN_New']; ?>
							</td>

							<td align="center">
								<?php echo $rsOpd_Socail['AN_old']; ?>
							</td>

							<td align="center">
								<?php echo $rsOpd_Socail['regdate_AN_Old']; ?>
							</td>

							<td align="center">
								<?php echo $rsOpd_Socail['dcdate_AN_Old']; ?>
							</td>

							<td align="center">
								<?php echo $rsOpd_Socail['icd10_1']; ?>
							</td>

							<td align="center">
								<?php echo $rsOpd_Socail['ReAdmitDate']; ?>
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
					$exp_file="opd";
					
				}else{
						
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
