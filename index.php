<?php

// echo "echo statement " . "second echo statement <br>";

// print ("<h2>print statement</h2>") . ("<h2>second echo statement</h2>");

// $name = "Ali"; // string
// $age = 25; // integer
// $speaksenglish = true; // boolean
// $percentage = 50.9; //float

// echo ($name . "<br>" . $age.  "<br>" . $speaksenglish . "<br>" . $percentage );
// var_dump($name) . "<br>";
// var_dump($age) . "<br>";
// var_dump($speaksenglish) . "<br>";
// var_dump($percentage) . "<br>";


// if($age < 20){
//     if($speaksenglish = false){
        
//         echo "$name ki shadi hosakti hai";
//     }else{
//         echo "nh hogi kbi bh";
//     }
// }
// else{
// echo "hojaegi";
// }

// $azan = true;
// $wuzu = true;

//  if($azan == false){
//     if($wuzu == true){
//         echo "ao Namaz ki taraf";
//     }else{
//         echo "pehle wuzu kro";
//     }
//  }else{
//     echo "Asar ka time khtm";
//  }

// $time2 = "4:00";
// if($time1 >= "4:30AM" && $time1 <= "6:00AM"){
//     echo "its time to perform the namaz e Fajar";
// }elseif($time1 >= "1:30PM" && $time1 <= "3:30PM"){
    //     echo "its time to perform the namaz e duhr";
    // }
    // elseif($time1 >= "4:00PM" && $time1 <= "6:45PM"){
        //     echo "its time to perform the namaz e asar";
        // }
        // elseif($time1 >= "7:00PM" && $time1 <= "7:30PM"){
            //     echo "its time to perform the namaz e maghrib";
            // }
            // else{

                //         echo "its time to perform the namaz e Isha";
                // }
                // elseif($time1 >= "8:30" && $time1 <= "12:00"){
                    // }
                    
// $time = strtotime("5:00PM");
                    
// switch(strtotime($time)){
//     case (strtotime($time) >= "4:30AM" && strtotime($time) <= "6:00AM") :
//         echo "its time to perform fajar";
//         break;
//     case (strtotime($time) >= "1:30PM" && strtotime($time) <= "4:00PM") :
//         echo "its time to perform duhr";
//         break;
//     case (strtotime($time) >= "4:00PM" && strtotime($time) < "7:00PM") :
//         echo "its time to perform Asar";
//         break;
//     case (strtotime($time) >= "7:30PM" && strtotime($time) <= "8:00PM") :
//         echo "its time to perform Maghrib";
//         break;
//     case (strtotime($time) >= "8:30PM" && strtotime($time) <= "12:00PM") :
//         echo "its time to perform Isha";
//         break;
//         default:
//         echo "ap 7 saal k nh ho";
// }



// functions in php

$str = "Addition";  // global
// function addition($num1 , $num2){
//     // $num1 = 5;
//     // $num2 = 6;
//    global $str;  
//     $result = $num1 + $num2; 
//     return $str . " " . $result;
// }

//  $functionvalue = addition(4, 5);
// echo " the sum of two variables :  $functionvalue";

// var_dump($str);
//  echo strlen($str);

//  first method
                // 0       1       2       3
// $fruits = array("Apple", "Mango","Banana", "grapes");

// // echo $fruits[0];
// // echo "<pre>";
// // print_r($fruits);
// // echo "</pre>";


// for($i = 0; $i < 4; $i++){
//     echo $fruits[$i] . "<br>";
// }
// echo "<br>";


// // second method

// $vegies = ["Aalu", "Loky", "Tindy", "Bhindi"];
// // echo "<pre>";
// // print_r($vegies);
// // echo "</pre>";

// foreach ($vegies as $key => $value) {
//     echo $value . "<br>";
// }



// // third method

// $cars[0] = "Civic";
// $cars[1] = "City";
// $cars[2] = "accord";
// $cars[3] = "supra";

// echo "<pre>";
// print_r($cars);
// echo "</pre>";



// // Associative Array

// $marks = [
//     "Maths" => 34,
//     "English" => 22,
//     "Urdu" => 00,
//     "Isl" => 50
// ];

// foreach ($marks as $k => $v) {
//     echo "$k = $v <br>";
// }

// multidimensional indexed Array

$class = [
    [34, 55, 66],
    [22, 44, 77],
    [88, 55, 00]
];
echo "<pre>";
print_r($class[2]);
echo "</pre>";

for($i = 0; $i < count($class); $i++){

    for($j = 0; $j < count($class); $j++){
    echo $j  . ") ".  $class[$i][$j] . "<br>";
}
echo "<br>";
}


// Multidimensional associative array


$progress = [
    "Ali" => ["maths" => 33, "physics" => 55, "English" => 50],
    "Ehtisham" => ["maths" => 77, "physics" => 88, "English" => 55],
    "usman" => ["maths" => 99, "physics" => 55, "English" => 77]
];

// print_r($progress["Ali"]);
// echo $progress["Ali"]["physics"];

foreach ($progress as $key => $value) {
    echo "<h3> $key </h3> ". "<br>";
    foreach ($value as $k => $v) {
        echo "$k  =   $v <br>";
        
    }
}







































?>