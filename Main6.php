<!-- Q5.Write a PHP Script to Check String for Palindrome. -->
<?php
$str = "madam";
if ($str == strrev($str)) {
    echo "Palindrome";
} else {
    echo "Not Palindrome";
}
?>