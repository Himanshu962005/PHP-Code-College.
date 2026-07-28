<!-- Q2.Write Script to Construct the Following Pattern, Using Nested for Loop.
1
1 2
1 2 3
1 2 3 4
1 2 3 4 5
-->
<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
?>