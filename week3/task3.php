<!DOCTYPE html>
<html>
<body>

	<h1> Task 3</h1>

<?php

$array1 = array(2, 3);
$array2 = array(2, 3, 4);
$array3 = array(2, 3, 4, 5);

echo "Given arrays: " ;

echo "<br>"."array1: ";
print_r($array1);

echo "<br>"."array2: ";
print_r($array2);

echo "<br>"."array3: ";
print_r($array3);


$total1 = array_sum($array1);
echo "<br>"."Sum array1 = ".$total1 ."<br>";

$total2 = array_sum($array2);
echo "Sum array2 = ".$total2 ."<br>";

$total3 = array_sum($array3);
echo "Sum array3 = ".$total3 ."<br>";

?>

</body>
</html>