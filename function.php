<?php
	//without arguments
	function show()
	{
		echo "<br/>";
		echo "show function";
		echo "<br/>";
	}
	show();
	show();
	
	//with arguments/parameters
	function add($a,$b)
	{
		echo "<br/>";
		$c=$a+$b;
		echo "The Sum is = ".$c;
		echo "<br/>";
	}
	add(100,200);
	add(400,298);
	
	//with argumnets and return value
	function add1($a,$b)
	{
		echo "<br/>";
		$c=$a+$b;
		return($c);
	}
	$d=add1(29,935);
	echo $d;
?>