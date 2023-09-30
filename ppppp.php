<!DOCTYPE html>
<html>
<body>

<?php
// Poorly organized and hard-to-read code

// Calculate the total price of items in a shopping cart
$items = [
 ['name' => 'Widget A', 'price' => 10],
 ['name' => 'Widget B', 'price' => 15],
 ['name' => 'Widget C', 'price' => 20],
];

function totalPrice(array $items) {
    $total = 0;
    foreach ($items as $item) {
    $total += $item['price'];
    } 
    return $total;
}
 echo 'Total price: $' .  totalPrice($items);
 echo '<br>';

// Perform a series of string manipulations
$string = "This is a poorly written program with little structure and readability.";

function stringConverter(string $str) {
    $strconv = str_replace(' ', '', $str);
    $strconv = strtolower($strconv);
    return $strconv;
}
echo 'Modified string: ' . stringConverter($string);
echo '<br>';


// Check if a number is even or odd
function oddOrEven(int $num){
    if ($num % 2 == 0) {
        return "\nThe number " . $num . " is even.";
       } else {
        return "\nThe number " . $num . " is odd.";
       }
}
$number = 42;
echo oddOrEven($number);

?>
</body>
</html>
