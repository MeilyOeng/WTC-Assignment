<!DOCTYPE html>
<html>
<body>

	<h1> Task 2 </h1>

<?php


function filterArray($indexedArray)
{
	return !($indexedArray & 1);
}

$indexedArray = [2, 3, 4, 6, 7, 9, 11, 20];


print_r ($indexedArray);
echo "<br>";

echo "Filtered Array: ";
print_r(array_filter($indexedArray, 'filterArray'));

?>

</body>
</html>

