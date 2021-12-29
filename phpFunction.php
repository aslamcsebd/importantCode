<?php

/* "Top 100 PHP Functions */
/* https://www.exakat.io/en/top-100-php-functions/ */

   define('br', "<br>");
   $array = array('fox', 'bear', 'deer', 'cat', 'dog', 'elephant', 'wolf');
   $text = "Victory loves preparation";
   $vowels = array('a', 'e', 'i', 'o', 'u');

// PHP Functions (1 - 10)
// https://www.youtube.com/watch?v=t9FrpTZm1ds&t=1628s&ab_channel=CleverTechie

// 1) count
      echo "Total = ".count($array);
      for ($i=0; $i <count($array) ; $i++){
            $j=$i+1 .") ";
         echo $j.$array[$i].br;
      }

// 2) substr
      echo substr($text, 0, 7);

// 3) is_array
      if (is_array($array)){
         echo "Array exit";
      }

// 4) in_array
      if (in_array('fox', $array, true)){
         echo "In the array exit";
      }

// 5) explode
      $text2 = "fox, bear, deer, cat, dog, elephant, wolf";
      $columns2 = "fox|bear|deer|cat|dog|elephant|wolf";
      print_r(explode("," ,$text2));
      print_r(explode("|" ,$columns2,));
      print_r(explode("|" ,$columns2, 2));

// 6) str_replace
      echo str_replace($vowels, '-', $text);

// 7) implode   
      echo implode("," ,$vowels);

// 8) strlen
      echo strlen($text);

// 9, 9.1) array_merge/array_combine
      $vowels2 = array('a', 'e', 'i', 'o', 'u');
      $array2 = array('fox', 'bear', 'deer', 'cat', 'dog');
      print_r(array_merge($vowels2, $array2));
      print_r(array_combine($vowels2, $array2));

// 10) strpos
      echo strpos($text, 'loves');
