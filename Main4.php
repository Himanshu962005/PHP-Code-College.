<!-- Q4.Write a PHP Script to Get the Largest Key in an Array. -->
<?php
$arr = array(
    5 => "Apple",
    10 => "Banana",
    2 => "Orange",
    20 => "Mango"
);
echo "Largest Key = " . max(array_keys($arr));
?>