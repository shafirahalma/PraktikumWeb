<?php
function nilaiPangkat($x, $y) {
    $result = 1;
    for($i = 0; $i < $y; $i++) {
        $result *= $x;
    }

    return $result;
}
echo nilaiPangkat(5, 3);
