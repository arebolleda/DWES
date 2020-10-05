<HTML>
<HEAD> <TITLE> DNI </TITLE> </HEAD>
<BODY>
<h1>DNI</h1>
<?php
$dni="51788370Y";
$letras="TRWAGMYFPDXBNJZSQVHLCKE";
$letra=substr($dni,8);
echo "DNI: ".$dni."<br>";
$res=(integer)substr($dni,0,8)%23;
if ($res>=-1 AND $res<=22)
{
	$letraN=substr($letras,$res,1);
	if ($letraN===$letra)
		echo "La letra ".$letraN." es correcta";
	else
		echo "La letra ".$letra." no es igual a la calculada ".$letraN;
}

    
?>
</BODY>
</HTML>
