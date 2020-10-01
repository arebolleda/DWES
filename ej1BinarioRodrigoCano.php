<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario de Rodrigo Cano </TITLE>
</HEAD>
<BODY>
<?php
$ip="192.18.16.204";
echo $ip;
$pun=strpos($ip, ".");
printf (" en binario es %08b.",substr($ip,0,$pun));

$ip2=substr($ip, ++$pun);
$pun2=strpos($ip2, ".");
printf ("%08b.",substr($ip2,0,$pun2));

$ip3=substr($ip2, ++$pun2);
$pun3=strpos($ip3, ".");
printf ("%08b.",substr($ip3,0,$pun3));

$ip4=substr($ip3, ++$pun3);
printf ("%08b\n",$ip4);

?>
</BODY>
</HTML>
