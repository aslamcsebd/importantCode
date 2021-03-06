<meta http-equiv="refresh" content="3">
<?php

/* User defined function */
  
   function hi(){
      echo "Hellow world";
   }
   hi();

/* Function with parameters */

   function welcome($name){
      echo "Welcome $name";
   }
   welcome("Aslam");

   function area($height, $width){
      $answer = $height * $width;
      echo "Area is = $answer";
   }
   area(10, 20);

/* Call by reference */

   function swap(&$x, &$y){
      $t=$x;  // Ex: $x = abc; $y = abc2;
      $x=$y;
      $y=$t;
   }
   $a=10; $b=20;
   echo "Before swap a=$a, b=$b<br>";
   swap($a, $b);
   echo "After swap a=$a, b=$b<br>";

/* Default argument */

   function percentage($p, $c, $m, $ttl=300){
      echo "p=$p, c=$c, m=$m, ttl=$ttl<br>";
      $percent = ($p+$c+$m)*100/$ttl;
      echo "percentage=$percent<br>";
   }
   percentage(50, 60, 70);
   percentage(25, 30, 35, 150);

/* Variable length argument */

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

/* Return value */

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
