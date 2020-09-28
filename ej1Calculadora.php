<HTML>
<HEAD> <TITLE> Calculadora </TITLE> </HEAD>
<BODY>
<h1>Calculadora</h1>
<?php
$n1=53;
$n2=4.2;
echo "$n1 es del tipo". gettype($n1)."<br/>";
echo "$n2 es del tipo". gettype($n2)."<br/>";
echo $n1 ." + " . $n2. "= ".($n1+$n2). "<br>";
print $n1 ." - " . $n2. "= ".($n1-$n2). "<br>" ;
print $n1 ." * " . $n2. "= ".($n1*$n2). "<br>" ;
echo $n1 ." / " . $n2. "= ".($n1/$n2). "<br>" ;
echo $n1 ."++ = " .($n1++);
?>
</BODY>
</HTML>
