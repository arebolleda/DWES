<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>
<?php
$ip="192.168.16.100/16";
$pun=strpos($ip, "/");
$mask= substr($ip,++$pun);
echo "IP :".$ip."</br>";
echo "Mascara: ".$mask."</br>";

echo "Direccion Red: ";

//echo $ip ."=";
$pun=strpos($ip, ".");
$ip1= substr($ip,0,$pun);
$mask1=(String)str_pad(decbin($ip1),8,"0",STR_PAD_LEFT);
//echo substr($mask1,0,$mask)."</BR>";

$ip2= substr($ip, ++$pun);
$pun=strpos($ip2, ".");
$ip1= substr($ip2,0,$pun);
$mask2=""+str_pad(decbin($ip1),8,"0",STR_PAD_LEFT);
//echo str_pad(decbin($ip1),8,"0",STR_PAD_LEFT)."<br>";
$ip1= substr($ip2,++$pun);
//echo $ip1;//16.100/16
//echo $mask1."".$mask2;
//$mask3=$mask1."".$mask2;

$pun=strpos($ip1, ".");
$ip2= substr($ip1,0,$pun);//16
$mask3=""+str_pad(decbin($ip2),8,"0",STR_PAD_LEFT);//16 en bin
//echo "<br>".$ip2."ddd<br>";
//echo str_pad(decbin($ip2),8,"0",STR_PAD_LEFT)."<br>";
$ip1= substr($ip1,++$pun);//ip1=100/16
//echo "<br>sss".$ip1."sss<br>";
$pun=strpos($ip1, "/");
$ip2= substr($ip1,0,$pun);//100
$mask4=""+str_pad(decbin($ip2),8,"0",STR_PAD_LEFT);//100 en bin
//echo str_pad(decbin($ip2),8,"0",STR_PAD_LEFT)."<br>";
//$ip1= substr($ip2,++$pun);// mascara:16
echo $mask1.".".$mask2.".".$mask3.".".$mask4;
echo "<br>";
//$mask=$mask1."".$mask2."".$mask3."".$mask4;
$mask= str_pad(substr($mask1."".$mask2."".$mask3."".$mask4,0,16),32,"0",STR_PAD_RIGHT);
echo "<br>";
echo substr($mask,0,8).".".substr($mask,8,16).".".substr($mask,16,24).".".substr($mask,24,32);
?>
</BODY>
</HTML>
