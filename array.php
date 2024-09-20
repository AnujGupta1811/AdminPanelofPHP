<?php 
	$arr=array(1,2,3,4,5);
	foreach($arr as $val)
	{
		echo $val."</br>";
	}
	$arr1=array(1=>'ABC',2=>'XYZ',3=>'PQR',4=>'PQR',5=>'JKL');
	foreach($arr1 as $id=>$val)
	{
		echo $id."< - >".$val."</br>";
	}
	echo "</br>";
	echo "</br>";
	echo "</br>";
	$arr2=array(1=>'MMC',2=>'NNN',3=>array('a'=>'aa','b'=>'bb'));
	foreach($arr2 as $i=>$v)
	{
		if(is_array($v))
		{
			foreach($v as $key=>$value)
			{
				echo $key." < > ".$value;
				echo "</br>";
			}
		}
		else
		{
			echo $i." ---- ".$v."</br>";
		}
	}
?>