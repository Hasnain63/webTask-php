
<!DOCTYPE html>
<html>
<head>
	<title>Array Functions</title>
</head>
<body>
<h2>Array Functions</h2>
<?php 
	$array = [1,2,3,4,5,6];
	array_shift($array);
	echo implode($array," ")."<br>";
	//Write php array function to prepend an element at the top of array
	array_unshift($array,"A","B");
	echo implode($array," ")."<br>";
	//Write php array function to add an element at the end of an array
	array_push($array,12,14);
	echo implode($array," ")."<br>";
	//Write php array function to remove last element from an array
	array_pop($array);
	echo implode($array," ")."<br>";





?>

</body>
</html>
