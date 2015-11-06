<html>
 <head>
  <meta http-equiv='Content-Type' content='text/html; charset= utf-8'/>
<meta content="width=device-width,user-scalable=no" name="viewport"> 
  <link rel="icon" href="Images/favicon.ico" type="image/x-icon" />
  <title>Huang Le Funds</title>
  <style type="text/css">
      html,body{
        margin: 0;
        padding: 0;
	}
	.con_value{font-size:18px;position:relative;}
	.con_value_up{color:#C00;height:20px;}
	.con_value_down{color:#080;height:20px;}
	.con_ratio_red{font-size:16px;margin-left:1px;color:#C00}
	.con_ratio_green{font-size:16px;margin-left:1px;color:#080}
	.con_ratio_up{padding-left:10px;}
	.con_ratio_down{padding-left:10px;}
  </style>
 </head>
 <body> 
<?php
	$ryb500 = file_get_contents("http://www.howbuy.com/fund/ajax/gmfund/valuation/valuationnav.htm?jjdm=000962");
	$ryb500n = substr($ryb500,strpos($ryb500,"<span"),strpos($ryb500,"]")-strpos($ryb500,"<span") + 8);
	$ryb500value = substr($ryb500n,strpos($ryb500n, '>')+1,6) * 179.72;
	$Jingxuan = file_get_contents("http://www.howbuy.com/fund/ajax/gmfund/valuation/valuationnav.htm?jjdm=420001");
	$Jingxuann = substr($Jingxuan,strpos($Jingxuan,"<span"),strpos($Jingxuan,"]")-strpos($Jingxuan,"<span") + 8);
	$Jingxuanvalue = substr($Jingxuann,strpos($Jingxuann, '>')+1,6) * 999.41;
	$Intotal = $ryb500value + $Jingxuanvalue;
	$Wintotal = $Intotal - 1300.0;
?>
<h2>My Funds Information</h2>
<table>
<tr><td width="200px">1.容易宝500,</td><td><?php echo $ryb500n; ?></td></tr>
<tr><td>2.天弘精选,</td><td><?php echo $Jingxuann; ?></td></tr>
<tr><td>Intotal.</td><td>Win.</td></tr>
<tr><td><font color="#f00" size="6"><?php echo number_format($Intotal,2);?></font></td>
    <td><font color="#f00" size="6"><?php echo number_format($Wintotal,2);?></font></td></tr>
</table>
<hr style=" height:2px;border:none;border-top:2px dotted #185598;" />
<table><tr>
<td><img src="http://j4.dfcfw.com/charts/pic1/000962.png" /></td>
<td><img src="http://j4.dfcfw.com/charts/pic1/420001.png" /></td>
</tr></table>	
</body>
</html>
