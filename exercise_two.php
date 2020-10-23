<!DOCTYPE html>
<html>
<body>

<form action="exercise_two.php"  method="get">

Input first number:<br> 
<input name="num1"><br>
Input second number:<br> 
<input name="num2"><br>

<button type="submit" name="a">ADD +</button>
<button type="submit" name="s">SUB -</button>
<button type="submit" name="m">MUL *</button>
<button type="submit" name="d">DIV /</button>

<?php 
// PHP code goes here

if(isset($_GET['a'])) {
    
    $a=$_GET['num1'];
    $b=$_GET['num2'];
    $add=$a+$b;
    echo '<br/>';
    echo 'Sum of two numbers is: '.$add;
}

if(isset($_GET['s'])) {
    
    $a=$_GET['num1'];
    $b=$_GET['num2'];
    $sub=$a-$b;
    echo '<br/>';
    echo 'Sub of two numbers is: '.$sub;
}

if(isset($_GET['m'])) {
    
    $a=$_GET['num1'];
    $b=$_GET['num2'];
    $mul=$a*$b;
    echo '<br/>';
    echo 'Mul of two numbers is: '.$mul;
}

if(isset($_GET['d'])) {
    
    $a=$_GET['num1'];
    $b=$_GET['num2'];
    $div=$a/$b;
    echo '<br/>';
    echo 'Div of two numbers is: '.$div;
}
   

?>

</form>
</body>
</html>