<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario de Rodrigo Cano</TITLE></HEAD>
<BODY>
<?php
$ip="192.18.16.204";
echo $ip ."=";
$pun=strpos($ip, ".");
#printf (" en binario es %b.",substr($ip,0,$pun));
$ip1= substr($ip,0,$pun);
echo str_pad(decbin($ip1),8,"0",STR_PAD_LEFT);

$ip2=substr($ip, ++$pun);
$pun2=strpos($ip2, ".");
#printf ("%b.",substr($ip2,0,$pun2));
echo ".".str_pad(decbin($ip2),8,"0",STR_PAD_LEFT);

$ip3=substr($ip2, ++$pun2);
$pun3=strpos($ip3, ".");
#printf ("%b.",substr($ip3,0,$pun3));
echo ".". str_pad(decbin($ip3),8,"0",STR_PAD_LEFT);

$ip4=substr($ip3, ++$pun3);
#printf ("%b\n",$ip4);
echo ".". str_pad(decbin($ip4),8,"0",STR_PAD_LEFT);;
?>
</BODY>
</HTML>
