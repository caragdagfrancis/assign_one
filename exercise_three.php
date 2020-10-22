<!DOCTYPE html>
<html>
<body>
<form action="exercise_three.php" method="get">

Finding GCD<br>

Input first number:<br> 
<input name="num3"><br>
Input second number:<br> 
<input name="num4"><br>

<button type="submit" =">Submit</button>


<?php
// PHP program to find GCD 
// of two numbers

// Recursive function to 
// return gcd of a and b

if(isset($_GET['num3']) || isset($_GET['num4'])) {
    $a=$_GET['num3'];
    $b=$_GET['num4'];
    echo "GCD of $a and $b is ", gcd($a , $b) ;

}

function gcd($a, $b)
{
	// Everything divides 0
	if($b==0)
		return $a ;

	return gcd( $b , $a % $b ) ;
}
// This code is contributed by Francis Caragdag
?>


</form>
</body>
</html>

