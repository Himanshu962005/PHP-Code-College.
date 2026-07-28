<!-- Q4.Write a Function to Calculate the Factorial of a Number (A Non-Negative Integer). -->
<?php
function factorial(int $number): int
{
    $fact = 1;
    for ($i = 1; $i <= $number; $i++) {
        $fact *= $i;
    }
    return $fact;
}
echo factorial(5);
?>