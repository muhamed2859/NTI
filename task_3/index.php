<?php
// 1
// $age = 18 ;
//  if($age > 18){
//     echo "Done";
//    }
//   else{
//   echo "the age less than 18 <br> <br> <br>";
//   }
  


//  2
// function number($x , $y){
// echo $x * $y . "<br>";
// echo $x - $y . "<br>";
// echo $x % $y . "<br>";
// }
// number(20 , 10);

// echo "<br> <br> <br>";

//  3
// function getSum($numbers){
// $total = 0;
// foreach($numbers as $num){
//     $total += $num;
    
// }
//     return $total;
//     }
// $sum = [10 , 15 , 2 , 3 , 16 , 18 ];
// echo "المجموع : " . getSum($sum);
// echo "<br> <br> <br>";

//   4
// $films = array("Fast" ,  "Predestination" , "Persuit" , "Prestige" );
// $keyword= "avatar";
// $found = "no" ;

// foreach($films as $film) {
//     if($film == $keyword ){
//         $found = "yes";
//         break;
//     }
// }
// echo $found;
// echo "<br> <br> <br>";

// 5
//  function RouteBubbl($arr){
//     $nom = count($arr);
//     for($i=0 ; $i < $nom -1 ; $i++){
//         for($j=0 ; $j < $nom - $i - 1 ; $j++){
//           if($arr[$j] > $arr[$j + 1]){
//             $temp = $arr[$j];
//             $arr[$j]= $arr[$j + 1];
//             $arr[$j + 1] = $temp;
//           }
//         }
//     }
//     return $arr;
//  } 
//  $numbers=array(64 , 30 , 25 , 12 ,36 , 14);
//  $sortNum = RouteBubbl($numbers);
// foreach($sortNum as $num){
//     echo $num  . "<br>" ;
// }

// echo "<br> <br> <br>";


// 6
// $test = [5 , 6 , 8 , 4 , 7, 9 , 3 ];
// $maxNumber = max($test);
// echo $maxNumber;
// echo "<br> <br> <br>";


// 7
// $Films = ['avatar' , 'Prestige' , 'avatar' , 'Prestige' , 'avatar'];
// $Keyword = 'avatar';
// $count = 0;

// foreach($Films as $Film){
//     if($Film == $Keyword){
//         $count++;
//     }
// }
// echo $count;


//  8
// function RouteRandomPass($length){
//     $chars = "avhgakiugugaggAKHCJHJGCLKCJC0123456789";
//     $randomPass = "";
//     for($i=0 ; $i< $length ;$i++){
//         $randomIndex = rand(0 , strlen($chars) - 1);

//         $randomPass .= $chars[$randomIndex];
//     }
//     return $randomPass;
// }
// echo RouteRandomPass(8);


//  9
// $test = [1 , "tariq" , 1.5 , true  , 7 ,'s', false];
// $length = count($test);
// for($i=0 ; $i<$length ; $i++){
//     $item = $test[$i];

//     if(is_bool($item)){
//         echo ($item ? "yes" : "no")."<br>";
//     }else{
//         echo $item ."<br>";
//     }
// }

// $i = 0;
// while($i<$length){
//     $item = $test[$i];
//     if(is_bool($item)){
//         echo ($item ? "yes" : "no")."<br>";
//     }else{
//       echo $item ."<br>";
//     }
//     $i++;
// }


//  10
// $tests = array(6,4 , 9 , 3 , 12 , 8 , 7);
// sort($tests);
// foreach($tests as $num){
//     echo $num . " ";
// }


//   11
// $arr1 = ['a' , 'b' , 'c' , 'd' , 'f'];
// $arr2 = ['e' , 'c' , 'g' , 'h' , 'd'];

// $common = array_intersect($arr1 , $arr2);
// $count = count($common);
// $i = 0 ; 
// foreach ($common as $item){
//     echo $item;
//     $i++;
//     if($i < $count){
//         echo" - ";
//     }
// }

?>