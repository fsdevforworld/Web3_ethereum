<?php

$array = [1,2,3,4,5];
function display_values($array) {
  $min = $array[0];
  $max = $array[0];
  $count_of_odd_num = 0;
  for($i = 0; $i < count($array); $i ++) {
    if($min > $array[$i]) {
      $min = $array[$i];
    }
    if($max < $array[$i]) {
      $max = $array[$i];
    }
    if($array[$i] % 2 == 1) {
      $count_of_odd_num ++;
    }
  }

  echo "min:".$min."<br/>";
  echo "max:".$max."<br/>";
  echo "count of odd numbers:".$count_of_odd_num."<br/>";
}

display_values($array);
?>
 