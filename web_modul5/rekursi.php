<?php
function fibonacciRekursif($n)
{
    if ($n <= 1) {
        return $n;
    }
    return fibonacciRekursif($n - 1) + fibonacciRekursif($n - 2);
}
for ($i = 0; $i < 8; $i++) {
    echo fibonacciRekursif($i) . " ";
}