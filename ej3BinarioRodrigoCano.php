<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>
<?php
$ip="10.33.15.100/8";
$pun=strpos($ip, "/");
$mask= substr($ip,++$pun);
echo "IP :".$ip."</br>";
echo "Mascara: ".$mask."</br>";

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
//echo "<br>".$ip1."d-d".$ip2."<br>";
$ip1= substr($ip1,++$pun);// mascara:16
//echo $mask1.".".$mask2.".".$mask3.".".$mask4;
//echo "<br>";
//echo $ip1."-".$ip2;
//$mask=$mask1."".$mask2."".$mask3."".$mask4;
$mask= str_pad(substr($mask1."".$mask2."".$mask3."".$mask4,0,$ip1),32,"0",STR_PAD_RIGHT); //mask.0.0
//echo "<br>";
//echo substr($mask,0,8).".".substr($mask,8,8).".".substr($mask,16,8).".".substr($mask,24)."<br>";
echo "Direccion Red: ".bindec(substr($mask,0,8)).".".bindec(substr($mask,8,8)).".".bindec(substr($mask,16,8)).".".bindec(substr($mask,24));
$broadCast=str_pad(substr($mask1."".$mask2."".$mask3."".$mask4,0,$ip1),32,"1",STR_PAD_RIGHT);
//echo "<br>".$broadCast."<br>";//Mask.255.255
echo "<br>";
echo "Direccion Broadcast: ".bindec(substr($broadCast,0,8)).".".bindec(substr($broadCast,8,8)).".".bindec(substr($broadCast,16,8)).".".bindec(substr($broadCast,24));
echo "<br>";
echo "Rango: ".bindec(substr($mask,0,8)).".".bindec(substr($mask,8,8)).".".bindec(substr($mask,16,8)).".".((bindec(substr($mask,24)))+1);
echo " a ".bindec(substr($broadCast,0,8)).".".bindec(substr($broadCast,8,8)).".".bindec(substr($broadCast,16,8)).".".((bindec(substr($broadCast,24)))-1);
?>
</BODY>
</HTML>
