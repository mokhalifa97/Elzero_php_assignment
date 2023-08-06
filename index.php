<?php

//* ==================Introduction(1)================== 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?='my first php page';?> </title>
  </head>
  <body>
    <div><?php echo "we love";?></div>
    <div><?php echo "Elzero Channel"; ?></div>
  </body>
</html>

<?php
//* ==================Introduction(2)==================

#echo 'Prevent Me From Running Please';
//echo 'Prevent Me From Running Please';
/*echo 'Prevent Me From Running Please';*/

//* ==================Introduction(3)==================

/* My Application
Version 1.0
Created By Elzero */

//* ==================Data Types(1)==================
echo "<hr>";

echo  (int)(15.2 + 14.7 + (10.5 + 10.5)) ."<br>"; // 50
echo  gettype((int)(15.2 + 14.7 + (10.5 + 10.5)))."<br>";  // Integer

//* ==================Data Types(2)==================
echo "<hr>";

echo gettype(100) ."<br>" ;// Method One
echo var_dump(100) ."<br>";// Method Two
echo is_int(100) ."<br>";// Method Three => Optional
//* ==================Data Types(3)==================
echo "<hr>";

echo "???" ."<br>";
echo "Hello \"Elzero\" \\\\ \"\"\" We love \"\$\$php\"" ;//needed output= Hello "Elzero" \\ """ We Love "$$PHP"

//* ==================Data Types(4)==================
echo "<hr>";

echo <<<"Here"
We \n Love \n Elzero \r\n Web \n School
Here;
//* ==================Data Types(5)==================
echo "<hr>";

echo <<<'Here'
Hello "'Elzero'" 
We Love $Programming$
Languages Specially "PHP"
Here;

//* ==================Data Types(6)==================
echo "<hr>";

$something = "Programming";

echo <<<"code"
Hello \PHP\
We Love $something
code;

//* ==================Data Types(7)==================
echo "<hr>";

echo "Hello PHP";
echo '<br>';
echo "Hello PHP";

// Needed Output
// 1
// integer

//* ==================Data Types(8)==================
echo "<hr>";

$array=[
  "frontend" => [
    
    "html",
    "css",
    "js"=>[
      "vuejs"=>["2" => "v2" , "3" => "v2"],
      "rect",
      "svelte"
      ]
    ],
    "backend" => [
      "php",
      "mysql",
      "security"
    ],
    "git",
    "github",
    "testing" => [
      "unit testing",
      "End To End",
      "Integration"
      ]
    ];
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    
    
    //* ===============Variables And Constants(1)==================
    echo "<hr>";
    
    $course="Elzero Courses";
    ?>
    <title>Welcome To <?= $course?></title>
  </head>
  <body>
    <h1><?= $course?></h1>
    <p>Here In <?= $course?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?= $course?> Is The What You Need.</div>
    <footer>All Right Reserved To <?= $course?></footer>
  </body>

  <?php
  //* ===============Variables And Constants(2)==================
  echo "<hr>";
  
  $name = "elzero";
  $$name = "Web";
  
  echo $$name;
  echo $elzero;
  echo " ${$name}";
  
  //* ===============Variables And Constants(3)==================
  echo "<hr>";
  
  $a = 200;
  $b = $a;
  $a = 100;
  $b = $a;
  
  echo $b; // 100

  //* ===============Variables And Constants(4)==================
  echo "<hr>";
  echo $_SERVER['DOCUMENT_ROOT'] . "<br>";
  echo $_SERVER['SERVER_NAME'] . "<br>";
  echo dirname(__FILE__);
  
  //* ===============Variables And Constants(5)==================
  echo "<hr>";
  /* break
  final
  include
  isset
  print
  catch
  static
  while */
  
  //* ===============Variables And Constants(6)==================
  echo "<hr>";
  
  echo __LINE__ . "<br>";
  echo __FILE__ . "<br>";
  echo __DIR__ . "<br>";
  
  //* ===============Operators(1)==================
  echo "<hr>";
  
  // Replace ? With Arithmetic Operators
  echo 10*20-15 % 3+190+10-400 ; // 0

  //* ===============Operators(2)==================
  echo "<hr>";
  
  $a = "10";
  echo (int)$a;
  echo gettype((int)$a);
  /*Needed Ouput
  10
  "integer"
  10
  "integer"
  10
  "integer" */
  
    //* ===============Operators(3)==================
    echo "<hr>";
    
    $a = 10;
    $b = 20;
    echo "$a <=> $b";
    // Needed Output
    // -1

    //* ===============Operators(4)==================
    echo "<hr>";
    
    $a = 10;
    $b = 20;
    $c = 15;
    
    var_dump($a < $b); // True
    var_dump($c > $a); // True
    var_dump($a <= $b); // True
    var_dump($a != $b); // True
    var_dump($a <> $c); // True
    var_dump($a <= $c); // True
    var_dump(gettype($a) === gettype($b)); // True
    var_dump(gettype($a) === gettype($b)); // True
    var_dump(gettype((float) $a) !== gettype($b)); // True
    
    //* ===============Operators(5)==================
    echo "<hr>";
    
    $points = 10;
    
    // Write Your Code Here
    $points +=3;
    echo $points; // 13
    // Write Your Code Here
    $points -=5;
    echo $points; // 8;
    
    //* ===============Operators(6)==================
    echo "<hr>";
    $a = "Elzero";
    $b = "Web";
    $c = "School";
    
    // Method One
    // $d = ???;
    $d= "$a $b $c";
    // Method Two
    // $d = ???;
    $d= "{$a} {$b} {$c}";
    // Method Three
    // $d = ???;
    $d= $a . " " . $b . " " . $c;
    
    echo $d; // Elzero Web School
    
    
    //* ===============Operators(7)==================
    echo "<hr>";
    $a = 10;
    $b = 20;
    
    
    echo ($a + $b * $a) + $b + $a *( $a * $a); // 10000
    
    //* ===============Operators(8)==================
    echo "<hr>";
    // Code 1
    // $aa = 55;
    // $b = @$aa or die("Variable Not Found");
    // echo "test $b";
    // // Code 2
    // $f = file("Not_A_File") or die("File Not Found");
    
    // // Code 3
    // (@include("osama_elzero.php")) or die("Include File Not Found");include("Not_A_File");
    
    ?>
    <?php
    //* ===============If Condition, Switch (1)==================
    echo "<hr>";

    $a = 100;
    $b = 200;
    $c = 100;
    
    if($b>$a){
      if($a === $c){
        if($a+$c === $b){
          echo "yes";
        }
      }
    }
    
    /*
      Check That:
      Variable "b" Larger Than Variable "a"
      Variable "a" Identical To Variable "c"
      Variable "a" Plus Variable "c" Identical To Variable "b"
    */

        //* ===============If Condition, Switch (2)==================
        echo "<hr>";
        // Test Case 1
        $a = 200;
        $b = 200;
        $c = 100;
        
        if($a>$b){
          echo "A is larger than B";
        }elseif($a>$c){
          echo "A is larger than C";
        }else{
          echo "A is not larger than B or C";
        }
        
?>

<?php
        //* ===============If Condition, Switch (3)==================
        echo "<hr>";
        $admins = ["Osama", "Ahmed", "Sayed"];
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
          echo "The Request Method Is Post And Username Is " . $_POST["user"] ;
            if( in_array($_POST["user"],$admins)){
              echo "This Username " . $_POST["user"] . " Is Admin";
            }
        }
        
?>
    <form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
  </form>

  <?php
        //* ===============If Condition, Switch (4)==================
        echo "<hr>";
        $a = 30;
        $b = 20;
        $c = 10;
        
        echo ($a + $b === $c) ? "A + B = C" : (($a + $c === $b) ? "A + C = B" : (($b + $c === $a) ? "B + C = A" : ("The End") ));

        echo "<hr>";
  //* ===============If Condition, Switch (5)==================
  $name = "Osama";
  $age = 40;
  $country = "Egypt";
  
  echo ($age > 18) ? "The Age Is Good To Go<br>" :"" ; echo (gettype($name) === "string") ? "The Name Is Good To Go<br>":''; echo ($country === "Egypt") ? "The Country Is Good To Go<br>" :"" ;
  
  echo "<hr>";
//* ===============If Condition, Switch (6)==================
    $genre = "Hack And Slash";
  switch ($genre) {
    case "RPG":
      echo "I Recommend Ys Games";
      break;
    case "Hack And Slash":
      echo "I Recommend Castlevania Games";
      break;
    case "FPS":
      echo "I Recommend Uncharted Games";
      break;
    case "Platform":
      echo "I Recommend Megaman Games";
      break;
    case "Puzzle":
      echo "I Recommend Megaman Games";
      break;
    default:
      echo "I Recommend Shadow Of Mordor And Shadow Of War";
  }   

    echo "<hr>";
  //* ===============If Condition, Switch (7)==================
  $num_one = 23;
  $num_two = 5;
  $op = "/";

    if($op == "+"){
      echo $num_one + $num_two;
    }elseif($op == "-"){
      echo $num_one - $num_two;
    }elseif($op == "*"){
      echo $num_one * $num_two;
    }elseif($op == "/"){
      echo  (int)($num_one / $num_two) . "<br>";
      echo  $num_one % $num_two;
    }else{
      echo "Unknown Operation";
    }

    echo "<hr>";
  //* ===============If Condition, Switch (8)==================
  $day = "Sat";
    if($day == "Sat" ||$day == "Sun"||$day == "Mon" ){
      echo "We Are Open All The Day";
    }elseif($day == "Sat" ||$day == "Sun"){
      echo "We Are Open From 08:12";
    }elseif($day == "Thu" ||$day == "Fri"){
      echo "We Are Closed";
    }else{
      echo "Unknown Day";
    }

    echo "<hr>";
    //* =============== Loop (1)==================
    for($index=10;$index>=1;$index--){
      echo $index . "<br>";
    }

    echo "<hr>";
    //* =============== Loop (2)==================
    for($index=0;$index<=20;$index+=2){
      if($index==0){
        continue;
      }
      echo $index . "<br>";
    }

    $i=0;
    while ($i<=20){
      if($index==0){
        continue;
      }
      echo $i . "<br>";
      $i+=2;
    }

    $i=2;
    do{
      echo $i . "<br>";
      $i+=2;
    }while ($i<=20);
    
    echo "<hr>";
    //* =============== Loop (3)==================
      $start = 10;
      $end = 0;
      $stop = 3;

      for($i; $i>=$end; $i--){
        if($i<$start){
          echo "0$i" . "<br>"; 
            if($i==$stop){
                break;
            }
        }else{
            echo $i . "<br>"; 
        } 
    }

  echo "<hr>";
  //* =============== Loop (4)==================
  $start = 0;
  $mix = [1, 2, 3, "A", "B", "C", 4];
  for($i=0;$i< count($mix);$i++){
    if($i==0 ||gettype($mix[$i])== "string"){
      continue;
    }else{
      echo $mix[$i] . "<br>";
    }
  }

  
  echo "<hr>";
  //* =============== Loop (5)==================
  $money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

  foreach($money as $i  => $val){
    echo "The Name Is $i And I Need $val Pound From Him" . "<br>";
  }

  echo "<hr>";
  //* =============== Loop (6)==================
  $mix = [1, 2, 3, "A", "B", "C", 4];
  $s=0;
  $n=0;
  for($i=0;$i< count($mix);$i++){
    if(gettype($mix[$i])== "string"){
      $s++;
      continue;
    }else{
      echo $mix[$i] . "<br>";
      $n++;
    }
  }
  echo "$n Numbers Printed" . "<br>";
  echo "$s Letters Ignored" . "<br>";

  echo "<hr>";
  //* =============== Loop (7)==================
  $nums = [1, 13, 12, 20, 51, 17, 30];
  foreach($nums as $v){
    if($v%2==0){
      echo $v/2 . "<br>";
    }
  }

  echo "<hr>";
  //* =============== Loop (8)==================
  $nums = [2, 4, 5, 6, 10];
  $i=count($nums) - 1;
  foreach($nums as $v){
    echo "$v + $nums[$i] =" . $v + $nums[$i] . "<br>";
    $i--;
  }
  echo "<hr>";
  //* =============== Function  (1)==================
  function greeting ($name,$gender=''){
    if($gender=="Male"){
      echo "Hello Mr $name";
    }elseif($gender=="Female"){
      echo "Hello Miss $name";
    }else{
      echo "Hello $name";
    }
  }
  
  echo greeting("Osama", "Male"); // Hello Mr Osama
  echo greeting("Eman", "Female"); // Hello Miss Eman
  echo greeting("Sameh"); // Hello Sameh
  echo "<hr>";
  //* =============== Function (2)==================
  function get_arguments(...$nums) {
    $array=func_get_args();
    $r='';
    foreach($array as $v){
      $r .= "$v ";
    }
    return $r;
  }
  echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
  echo get_arguments("I", "Love", "PHP"); // I Love PHP
  echo "<hr>";
  //* =============== Function (3)==================
  function sum_all(...$n){
    $arr=func_get_args();
    $result=0;
    foreach($arr as $v){
      if($v==5){
        continue;
      }
      if($v==10){
        $result += $v+10;
      }else{
        $result += $v;
      }
    }
    return $result;
  }
  echo sum_all(10, 12, 5, 6, 6, 10); // 64
  echo sum_all(5, 10, 5, 10); // 40
  echo "<hr>";
  //* =============== Function (4)==================
  function multiply(...$num){
    $arr= func_get_args();
    $r=1;
      foreach($arr as $v){
        if(gettype($v)== "string"){
          continue;
        }elseif(gettype($v)== "double"){
          $r *= (int)$v;
        }else{
          $r *= $v;
        }
      }
      return $r;
    }
    echo multiply(10,20); //200
    echo multiply("A", 10, 30); // 300
    echo multiply(100.5,10,"B"); // 1000
    echo "<hr>";
    //* =============== Function (5)==================
    function check_status ($a,$b,$c) {
      if(gettype($a)=='string' && gettype($b)=='integer' && gettype($c)=='boolean'){
        if($c==true){
          echo "Hello $a, Your age is $b, you are Available for Hire";
        }else{
          echo "Hello $a, Your age is $b, you are Not Available for Hire";
        }
      }
      elseif(gettype($a)=='integer' && gettype($b)=='string' && gettype($c)=='boolean'){
        if($c==true){
          echo "Hello $b, Your age is $a, you are Available for Hire";
        }else{
          echo "Hello $b, Your age is $a, you are Not Available for Hire";
        }
      }
      elseif(gettype($a)=='boolean' && gettype($b)=='integer' && gettype($c)=='string'){
        if($a==true){
          echo "Hello $c, Your age is $b, you are Available for Hire";
        }else{
          echo "Hello $c, Your age is $b, you are Not Available for Hire";
        }
      }
      elseif(gettype($a)=='boolean' && gettype($b)=='string' && gettype($c)=='integer'){
        if($a==true){
          echo "Hello $b, Your age is $c, you are Available for Hire";
        }else{
          echo "Hello $b, Your age is $c, you are Not Available for Hire";
        }
      }
    }
    echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"   
    echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"

    echo "<hr>";
    //* =============== Function (6)==================
    function calculate ($n1,$n2,$operation="add"){
      if($operation=="s" || $operation=="subtract"){
        echo $n1 - $n2;
      }elseif($operation=="m" || $operation=="multiply"){
        echo $n1 * $n2;
      }elseif($operation=="a" || $operation=="add"){
        echo $n1 + $n2;
      }else{
        echo "the operation is wrong";
      }
    }
    echo calculate(10, 20); // 30
    echo calculate(10, 20, "a"); // 30
    echo calculate(10, 20, "s"); // -10
    echo calculate(10, 20, "subtract"); // -10
    echo calculate(10, 20, "multiply"); // 200
    echo calculate(10, 20, "m"); // 200

    echo "<hr>";
    //* =============== Function (7)==================
    function calculate2(int $num_one, int $num_two) : float {
      return $num_one + $num_two;
    }
    
    echo calculate2(20, 10); // 30
    echo gettype(calculate2(20, 10)); // Double

    echo "<hr>";
    //* =============== Function (8)==================
    $greet = function($a){
      return "Greetings $a";
    };

    $greet= fn($a) => 'Greeting ' . $a;
    echo $greet("Osama"); // Greetings

    echo "<hr>";
    //* =============== String Built-In Functions (1)==================
    $num_one = -1;
    $num_two = 2.5;
    
    $let_one = "o";
    $let_two = "z";
    
    $str = "El%er0";
    
    // Write Your Code Here
    $n2=(int)$num_two;
    $str[$n2]=$let_two;
    $str[$num_one]=$let_one;
    echo $str; // Elzero
    echo "<hr>";
    //* =============== String Built-In Functions (2)==================
    $str = "Orezle";
    echo ucfirst(strtolower(strrev($str)));
    echo "<hr>";
    //* =============== String Built-In Functions (3)==================
    $str = 'aAa';
    $num = 3;
    $char = "_";
    // Write Your Code Here
    echo chunk_split(str_repeat(strtolower($str),$num),$num,$char);
    echo "<hr>";
    //* =============== String Built-In Functions (4)==================
    $str = "<div><b>Elzero</b></div>";
    echo strip_tags($str,"<b>");

    echo "<hr>";
    //* =============== String Built-In Functions (5)==================
    $str = "Elzero Web School";
    $e = "e";
    $o = "O";
    $four = 4;
    
    echo substr_count($str,$e,$four); // 1
    echo substr_count($str,strtolower($o),-$four);// 2

    echo "<hr>";
    //* =============== String Built-In Functions (6)==================
    $chars = ["E", "l", "z", "e", "r", "o"];
    echo implode("",$chars);
    
    echo "<hr>";
    //* =============== String Built-In Functions (7)==================
    $chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
    echo preg_replace('/[0-9]+/', '', ucfirst(strtolower(implode("",$chars))));
    
    echo "<hr>";
    //* =============== Array Functions (1)==================
    $friends = [
      "AG" => "Ahmed Gamal",
      "OM" => "Osama Mohamed",
      "MG" => "Mahmoud Gamal",
      "AS" => "Ahmed Samy",
      "FA" => "Farid Ahmed",
      "SM" => "Sayed Mohamed"
    ];
    $f1=array_change_key_case($friends);
    echo "<pre>";
    print_r(array_chunk($f1,2,true));
    echo "</pre>";
    
    
    echo "<hr>";
    //* =============== Array Functions (2)==================
    $codes = ["H", "C", "J"];
    $means = ["HTML", "CSS", "JavaScript"];

    $mix=array_combine($codes,$means);
    echo "<pre>";
    print_r(array_change_key_case($mix));
    echo "</pre>";
    
    echo "<hr>";
    //* =============== Array Functions (3)==================
    $friends = [
      "Ahmed Gamal" => "AG",
      "Osama Mohamed" => "OM",
      "Mahmoud Gamal" => "MG",
      "Ahmed Samy" => "AS"
    ];
    $f1=array_flip($friends);
    
    echo "<pre>";
    print_r(array_reverse(array_change_key_case($f1)));
    echo "</pre>";
    
    
    echo "<hr>";
    //* =============== Array Functions (4)==================
    function sum($n1,$n2){
      return $n1+$n2;
    }
    $nums = [10, 20, 30];
    
    echo array_reduce($nums,"sum");
    echo array_sum($nums);
    
    echo "<hr>";
    //* =============== Array Functions (5)==================
    $nums = [5, 10, 20, 5, 30, 40];
    $result=0;
    foreach($nums as $v){
      if($v == 5){
        continue;
      }
      $result +=$v;
    }
    
    echo $result;  // Output 100
    
    echo "<hr>";
    //* =============== Array Functions (6)==================
    $chars = ["A", "B", "C", "D", "E"];
    $char = "@@";
    $zero = 0;
    
    echo "<pre>";
    print_r(array_pad($chars,10,$char[$zero]));
    echo "</pre>";
    
    echo "<hr>";
    //* =============== Array Functions (7)==================
    $names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

    // Write Line Here
    next($names); 
    // Write Line Here
    next($names); 
    
    echo current($names) . "<br>"; // "Sayed"
    
    // Write Line Here
    end($names);
    
    echo current($names) . "<br>"; // "Ali"
    
    // Write Line Here
    reset($names);
    
    echo current($names) . "<br>"; // "Osama"
    
    // Write Line Here
    end($names);
    // Write Line Here
    prev($names);
    
    echo current($names) . "<br>"; // "Mahmoud"


    echo "<hr>";
    //* =============== Array Functions (8)==================
    $chars = ["A", "B", "C"];
    
    array_push($chars,"D");  
    $chars[]="F";
    
    echo "<pre>";
    print_r($chars);
    echo "</pre>";
    
    echo "<hr>";
    //* =============== Array Functions (9)==================
        $nums = [1, 2, 3, 4, 5, 6];
        
        echo "<pre>";
        print_r(array_slice($nums,-5,-2));
        echo "</pre>";
        echo "<hr>";
        //* =============== Array Functions (10)==================
        $mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
        $nums = [4, 5, 6];
        
        array_splice($mix,3,3,$nums);
        // Write Your Code Here
        
        print_r($mix);
        
        
  echo "<hr>";
  //* =============== Array Functions (11)==================
    $arr = ["A", "B", "C", "D", "E"];
    $count=0;
    foreach($arr as $v){
        $count++;
    }
    echo $count;

    echo "<hr>";
    //* =============== Array Functions (12)==================
    $nums = [11, 2, 10, 7, 20, 50];
    $count=0;
    foreach($nums as $v){
        $count+= $v;
    }
    echo $count;

    echo "<hr>";
    //* =============== Array Functions (13)==================
    $nums = [10, 100, -20, 50, 30];
    $count=0;
    foreach($nums as $v){
      if($v > $count){
        $count = $v;
      }
    }
    echo $count;

    echo "<hr>";
    //* =============== Array Functions (14)==================
    $nums = [10, 100, -20, 50, 30];
    $count=0;
    foreach($nums as $v){
      if($v < $count){
        $count = $v;
      }
    }
    echo $count;
    echo "<hr>";
    //* =============== Array Functions (15)==================
    $chars = ["o", "r", "e", "z", "l", "E"];
    
    for($i=5;$i>=0;$i--){
      echo $chars[$i];
    }
    echo "<hr>";
    //* =============== Array Functions (16)==================
    $mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
        $i=0;
        $new=array();
        foreach($mix as $v){
            if(gettype($v)== "string"){
                continue;
            }elseif($v % 2==0){
                continue;
            }else{
                $new[$i]=$v;
                $i++;
            }
            }
    
        echo "<pre>";
        print_r($new);
        echo "</pre>";

        echo "<hr>";
        //* ===============  Math Functions And Filters (1)==================
        $rand= rand(10,20);
        if($rand == 10 || $rand == 20 ){
          echo rand(10,20);
          
        }else{
            echo $rand;
}
echo "<hr>";
//* ===============  Math Functions And Filters (2)==================

      $friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];
      $rand= rand(0,count($friends)-1);
      echo $friends[$rand];

  echo "<hr>";
  //* ===============  Math Functions And Filters (3)==================
      $num1 = 11.5; // 11
      echo round($num1,0,PHP_ROUND_HALF_DOWN);

      $num2 = 9.4898; // 9.5
      echo round($num2,1);

      $num3 = -7.5; // -7
      echo round($num3,0,PHP_ROUND_HALF_DOWN);

  
      echo "<hr>";
      //* ===============  Math Functions And Filters (4)==================
              
        $fil=filter_list();
        $arr= array();
        $i=0;
        foreach($fil as $v){
            $arr[$i]= filter_id($v);
            $i++;
        }

        $finale_array= array_combine($arr,$fil);

        echo "<pre>";
        print_r($finale_array);
        echo "</pre>";

        echo "<hr>";
        //* ===============  Math Functions And Filters (5)==================
        $url1 = "http://www.elz ero.org";
        $url2 = "http://¥elzero.org";
        $url3 = "https://elzero.org";
        $url4 = "https://elzero.o¥rg";

            if(filter_var($url3,FILTER_VALIDATE_URL)){
                ECHO "its a valid url";
            }else{
                ECHO "its not a valid url";
                
            }

      echo "<hr>";
      //* ===============  Math Functions And Filters (6)==================
      $url1 = "http://www.elz ero.org";
      $url2 = "http://¥elzero.org";
      $url3 = "https://elzero.org";
      $url4 = "https://elzero.o¥rg";

      echo filter_var($url1,FILTER_SANITIZE_URL) . "<br>";
      echo filter_var($url2,FILTER_SANITIZE_URL) . "<br>";
      echo filter_var($url3,FILTER_SANITIZE_URL) . "<br>";
      echo filter_var($url4,FILTER_SANITIZE_URL) . "<br>";

      echo "<hr>";
      //* =============== File System (1)==================

      echo round (disk_total_space("C:") /1024/1024/1024/1024,2). " Terabyte <br>";
      echo round (disk_total_space("D:") /1024/1024/1024/1024,2). " Terabyte <br>";

      echo "<hr>";
      //* =============== File System (2)==================

      echo "Size in megabyte is " . round (filesize("D:\programming\Array course\Back-End\lec8\lec8\lec8.mp4") /1024/1024) . "<br>";

      echo "Size in kilobyte is " . round (filesize("D:\programming\Array course\Back-End\lec8\lec8\lec8.mp4") /1024) ;


      echo "<hr>";
      //* ===============  Sessions & Cookies  (1)==================

      setcookie("site[layout]","boxed",strtotime("+1 week"),"/");
      setcookie("site[font]","swat",strtotime("+1 week"),"/");
      setcookie("site[color]","blue",strtotime("+1 week"),"/");


      echo "<hr>";
      //* ===============  Sessions & Cookies  (2)==================

        echo "<pre>";
        print_r($_COOKIE);
        echo "</pre>";
    
        if(isset($_COOKIE['site'])){
          echo "the color is " .  $_COOKIE["site"]["color"] . " and your font is " . $_COOKIE["site"]["font"];
        }
      
      
        echo "<hr>";
        //* ===============  Sessions & Cookies  (3)==================
        
        setcookie("site[layout]","boxed",time(),"/");
        setcookie("site[font]","swat",strtotime("+1 week"),"/");
        setcookie("site[color]","blue",strtotime("+1 week"),"/");
        
        echo "<hr>";
        //* ===============  Sessions & Cookies  (4)==================
        setcookie("site[font]","swat",0,"/");
        setcookie("site[color]","blue",0,"/");
?>


