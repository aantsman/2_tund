<?php
//php.net
	echo date("l, j F o");

?>

<br>
<?php

	$first_name="Paul";
	$last_name="Sokk";


	//see on kommentaar, echo trükib välja
	echo $first_name. " ".$last_name; 

?>

<br>

<?php
// 8 on >= 6 ehk 8 on suurem või võrdne kuuega. 
// ==  võrdub
// =! ei võrdu
	$age=21;
//if(loogikatehe){tõene} else{väär}
	if($age>=18){
		echo"täisealine";
	} else {
		echo "alaealine";
	} 
?>

<br>

<?php
// {sulgude} vahel on see, mida korratakse
//for tegeleb tsüklitega
	for($i=0; $i<$age; $i=$i+1) {
		echo "palju ";
	}
	
	echo "õnne";

?>

<br>

<?php




?>

