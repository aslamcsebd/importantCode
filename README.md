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
