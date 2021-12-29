### PHP function

<details>
   <summary>User defined function</summary>

      function hi(){
         echo "Hellow world";
      }
      hi();
</details>

<details>
   <summary>Function with parameters</summary>

      function welcome($name){
         echo "Welcome $name";
      }
      welcome("Aslam");

      function area($height, $width){
         $answer = $height * $width;
         echo "Area is = $answer";
      }
      area(10, 20);
</details>

<details>
   <summary>Call by reference</summary>

      function swap(&$x, &$y){
         $t=$x;  // Ex: $x = abc; $y = abc2;
         $x=$y;
         $y=$t;
      }
      $a=10; $b=20;
      echo "Before swap a=$a, b=$b<br>";
      swap($a, $b);
      echo "After swap a=$a, b=$b<br>";
</details>

<details>
   <summary>Default argument</summary>

      function percentage($p, $c, $m, $ttl=300){
         echo "p=$p, c=$c, m=$m, ttl=$ttl<br>";
         $percent = ($p+$c+$m)*100/$ttl;
         echo "percentage=$percent<br>";
      }
      percentage(50, 60, 70);
      percentage(25, 30, 35, 150);
</details>

<details>
   <summary>Variable length argument</summary>

      function average(){
         $args = func_get_args();
         print_r($args);
         $sum=0;
         $count = func_num_args();
         for ($i=0; $i<func_num_args(); $i++) { 
            $sum += $args[$i];
         }
         $avg = $sum/$count;
         echo "<br>Average=$avg";
      }
      average(10,20,30,40,50);
</details>

<details>
   <summary>Return value</summary>

      function sum($v, $v2){
         return $v+$v2;
      }
      // return means function return this value again
      $v3 = sum(10, 20);
      echo "Sum=$v3";

      function sumMarks($marks){
         $sum = 0;
         foreach ($marks as $key => $value) {
            $sum += $value;
         }
         return $sum;
      }

      function avgMarks($marks){
         $sum = 0;
         $i = 1;
         foreach ($marks as $key => $value) {
            $sum += $value;
            $i++;
         }
         return $sum/$i;
      }

      $marksList = [35, 40, 45, 50, 55];   
      $sum = sumMarks($marksList);
      $avg = avgMarks($marksList);
      echo "Sum : $sum" . "<br>"  ."Avg : $avg";
</details>


### [Top 100 PHP Functions](https://www.exakat.io/en/top-100-php-functions)

## [PHP Functions (1 - 10)](https://www.youtube.com/watch?v=t9FrpTZm1ds&t=1628s&ab_channel=CleverTechie)

#### Default value

<pre>
   $array = array('fox', 'bear', 'deer', 'cat', 'dog', 'elephant', 'wolf');
   $text = "Victory loves preparation";
   $vowels = array('a', 'e', 'i', 'o', 'u');
</pre>

<details>
   <summary>1) count</summary>

      echo "Total = ".count($array);
      for ($i=0; $i <count($array) ; $i++){
            $j=$i+1 .") ";
         echo $j.$array[$i].br;
      }
</details>

<details>
   <summary>2) substr</summary>

      echo substr($text, 0, 7);
</details>

<details>
   <summary>3) is_array</summary>

      if (is_array($array)){
         echo "Array exit";
      }
</details>

<details>
   <summary>4) in_array</summary>

      if (in_array('fox', $array, true)){
         echo "In the array exit";
      }
</details>

<details>
   <summary>5) explode</summary>

      $text2 = "fox, bear, deer, cat, dog, elephant, wolf";
      $columns2 = "fox|bear|deer|cat|dog|elephant|wolf";
      print_r(explode("," ,$text2));
      print_r(explode("|" ,$columns2,));
      print_r(explode("|" ,$columns2, 2));
</details>

<details>
   <summary>6) str_replace</summary>

      echo str_replace($vowels, '-', $text);
</details>

<details>
   <summary>7) implode</summary>

      echo implode("," ,$vowels);
</details>

<details>
   <summary>8) strlen</summary>

      echo strlen($text);
</details>

<details>
   <summary>9, 9.1) array_merge/array_combine</summary>

      $vowels2 = array('a', 'e', 'i', 'o', 'u');
      $array2 = array('fox', 'bear', 'deer', 'cat', 'dog');
      print_r(array_merge($vowels2, $array2));
      print_r(array_combine($vowels2, $array2));
</details>

<details>
   <summary>10) strpos</summary>

      echo strpos($text, 'loves');
</details>

## [PHP Functions (11 - 20)](https://www.youtube.com/watch?v=rQxnnWg4XqQ&ab_channel=CleverTechie)

<details>
   <summary>11) preg_match</summary>

      function pre_r($array){
         echo '<pre>';
            print_r($array);
         echo '</pre>';
      }
      
      $src = '<img src="https://abc.com">';
      preg_match("!img src=\"(.*?)\"!", $src, $match);
      // preg_match("!img src=\"(.*?).(com)\"!", $src, $match);
      pre_r($match);
</details>

<details>
   <summary>12) sprintf</summary>

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
</details>

<details>
   <summary>13) trim</summary>

      $a = "The best of luck";
      echo trim($a, 'The');
</details>

<details>
   <summary>14) strtolower</summary>

      echo strtolower($a);
      echo strtoupper($a);
</details>

<details>
   <summary>15) file_exists</summary>
   
      $file = 'E:\image\image.png';
      if (file_exists($file)){
         echo "File $file exits";
      }else{
         echo "No file found";
      }
</details>

<details>
   <summary>16) is_string</summary>
      
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
</details>

<details>
   <summary>17) preg_replace</summary>

      $html = '<strong>Victory loves preparation</strong>';
      echo "$html<br>";
      echo preg_replace("!<strong>(.*?)</strong>!", "<i>$1</i>", $html);
</details>

<details>
   <summary>18) file_get_contents</summary>
   
      echo file_get_contents('https://instagram.com'); 
</details>

<details>
   <summary>19) array_key_exists</summary>

      $list = array('year'=> 2021, 'laptop'=>'hp', 'model'=>'hp folio 13');
      $list2 = array('year'=> 2021, 'laptop'=>'hp', 'model-serial'=>'hp folio 13');
      foreach ($list as $key => $value) {
         if (array_key_exists($key, $list2)) {
            echo "The $key exist!<br>";
         }else{
            echo "The $key doesn't exist!<br>";
         }
      }
</details>

<details>
   <summary>20) array_keys</summary>
   
      $list = array('year'=> 2021, 'laptop'=>'hp', 'model'=>'hp folio 13');
      print_r(array_keys($list));
</details>
