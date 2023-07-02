<?php

//primative data types

// int, float, string, bool, array
// $i = 123;
// echo $i . PHP_EOL;
// $f = 1.23;
// echo $f . PHP_EOL;
// $s = '123';
// echo $s . PHP_EOL;
// $b = true;
// echo $b . PHP_EOL;
// $a = [123];
// var_dump($a);
// $s2 = "s2 $i {$a}";
// var_dump($s2);


// array

// $arr = [1, 1.2, "string", ['2d array', 1]];
// $arr2 = [
//     'first element'  => 123,
//     'second element' => 'string',
//     'third element'  => [123, ['string'], test()],
//     'ss'  => false,
// ];
// echo $arr[2] . PHP_EOL;
// echo $arr2['first element'] . PHP_EOL;
// echo $arr2['ss'] . PHP_EOL;
// echo isset($arr2['ss']) && $arr2['ss'] === false ? 'false' : "not found" . PHP_EOL;
// echo $arr2[0];
// $array = [['name' => 'amir', 'lastname' => 'pou'], ['name' => 'ali', 'lastname' => 'kooshesh'], 'key' => null, null];
// $result = array_column($array, 'name');
// array_filter($array);
// var_dump($result);


// conditions
// $a = readline();
// if ($a == '1' && 'name' || 'amit' and (!"last" or 'name')) {
//     echo "in if";
// } elseif ($a == '2') {
//     echo "in elseif";
// } else {
//     echo "in else";
// }
// if($a == '1'){

// }
// if($a === '1'){

// }
// $a = null;
// if(is_null($a)){
//     echo "a is null";
// }

// false = '', [], 0, null;
// 1 == 1 ? 'firs' : 'second';
// $a = null;
// $a ?? "not null";



// loops
// for ($i = 0; $i < 10; $i++) {
//     echo "$i \n";
// }

// $a = 0;
// while ($a < 10) {
//     echo "$a \n";
//     $a++;
// }

// do {
//     echo "$a \n";
// } while ($a < 100);

// $a = [['name' => 'amir']];
// foreach ($a as $key => $value) {
//     echo "$key => $value \n";
//     foreach ($value as $i) {
//         if ($key == 'name') {
//             break 2;
//         }
//     }
//     //break and continue
// }


// function
// function name(string|int $a, int $b = 1): bool
// {
//     return true;
// }

// $a = function(){
//     return 'hi';
// };

// // $a();

// function closer(string $a, $b){
//     echo $b($a);
// };

// closer('hi', function($c){
//     return $c;
// });

