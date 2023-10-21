<?php
function get_max(...$numbers) {
    return max($numbers) ;
}

echo get_max(10, 20). "\n"; // Output: 20
echo get_max(10, 20, 30). "\n"; // Output: 30 
echo get_max(10, 20, 30, 40). "\n"; // Output: 40