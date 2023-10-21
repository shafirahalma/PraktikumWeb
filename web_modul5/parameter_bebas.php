<?php
function get_max_num() {
  $args = func_get_args();

  $max = null; 

  foreach ($args as $arg) {
    
    if (is_int($arg)) {
      
      if ($max === null || $max < $arg) {
        $max = $arg;
      }
    }
  }

  return $max;
}
echo get_max_num(74, 77, 79) . "\n"; // Output: 79
echo get_max_num(68, 62, 65). "\n" ; // Output: 68
echo get_max_num(22, 20, 29). "\n" ; // Output: 29
