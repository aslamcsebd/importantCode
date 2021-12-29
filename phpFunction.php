<?php

// Top 100 PHP Functions
// https://www.exakat.io/en/top-100-php-functions/

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

// PHP Functions (11 - 20)
// https://www.youtube.com/watch?v=rQxnnWg4XqQ&ab_channel=CleverTechie

// 11) preg_match
      function pre_r($array){
         echo '<pre>';
            print_r($array);
         echo '</pre>';
      }
      
      $src = '<img src="https://abc.com">';
      preg_match("!img src=\"(.*?)\"!", $src, $match);
      // preg_match("!img src=\"(.*?).(com)\"!", $src, $match);
      pre_r($match);

// 12) sprintf
      // https://www.php.net/manual/en/function.sprintf.php
      $v=2;
      $v2=3;
      $v3='+';
      $v4='=';
      $v5='5';

      $format = 'The sum is : %d %s %d %s %f';
      echo sprintf($format, $v, $v3, $v2, $v4, $v5);
      echo "<br>";
      $num = 5;
      $location = 'tree';

      $format = 'There are %d monkeys in the %s';
      echo sprintf($format, $num, $location);

// 13) trim
   $a = "The best of luck";
   echo trim($a, 'The');

// 14) strtolower
   echo strtolower($a);
   echo strtoupper($a);

// 15) file_exists
   $file = 'E:\image\image.png';
   if (file_exists($file)){
      echo "File $file exits";
   }else{
      echo "No file found";
   }

// 16) is_string
   $string = 'This is string';
   if (is_string($string)){
      echo "This is string";
   }

   $values = array(false, true, null, 'abc', '23', 23, '', ' ', '0', 0);
   foreach ($values as $value){
      echo "is_string(";
      var_export($value);
      echo ") = ";
      echo var_dump(is_string($value));
   }

// 17) preg_replace
   $html = '<strong>Victory loves preparation</strong>';
   echo "$html<br>";
   echo preg_replace("!<strong>(.*?)</strong>!", "<i>$1</i>", $html);

// 18) file_get_contents
   echo file_get_contents('https://instagram.com'); 

// 19) array_key_exists
   $list = array('year'=> 2021, 'laptop'=>'hp', 'model'=>'hp folio 13');
   $list2 = array('year'=> 2021, 'laptop'=>'hp', 'model-serial'=>'hp folio 13');
   foreach ($list as $key => $value) {
      if (array_key_exists($key, $list2)) {
         echo "The $key exist!<br>";
      }else{
         echo "The $key doesn't exist!<br>";
      }
   }

// 20) array_keys
   $list = array('year'=> 2021, 'laptop'=>'hp', 'model'=>'hp folio 13');
   print_r(array_keys($list));
