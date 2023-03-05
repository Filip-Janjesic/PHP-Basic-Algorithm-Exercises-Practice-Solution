<?php

/*
Write a PHP program to get the absolute difference between n and 51. 
If n is greater than 51 return triple the absolute difference.
Sample Input:
55
30
51
Sample Output:
6
21
0
*/

function test($n) 

{
    $x = 51;

    if ($n > $x){
        return ($n - $x)*3;
    }
        return $x - $n;
}

echo test (55) . "\n";
echo test (30) . "\n";
echo test (51) . "\n";  