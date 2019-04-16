<?php
function findPairs($nums, $sum) {
    $pairs = "";
    for ($i = 0; $i <= count($nums); $i++) {
        for ($j = $i + 1; $j < count($nums); $j++) {
            if ($nums[$i] + $nums[$j] == (int)$sum) {
                $pairs .= $nums[$i] . ", " . $nums[$j] . ";";
            }
        }
     }
     return $pairs;
   }
   $nums = array(0,1,2,5,6);
   echo findPairs($nums, 3);
?>






