<?php error_reporting(-1);
//В  массиве  А(N)  определить  максимальную  длину последовательности равных элементов.   
$A = [1, -7, -4, 9, 7, 2, 3, 3, -199, 4, 4, 4, -20, 6];

echo("A(n):<br>");
print_r($A);
echo("<br>Result:<br>");
$a = lenn_equal_max($A);
echo("Масимально в данном массиве встречается {$a} последовательностоящих равных элемментов");


function lenn_equal_max($array){
    $countres = [];
    $countern = 1; 
    $n = 0;
    for($i = 0; $i < count($array); $i++){
        if($array[$i] == $array[$i+1]){
            $countern++;
        }else{
            $countres[$n] =  $countern;
            $countern = 1;
            $n++;
        }
    }
    $max = $countres[0];
    for($i = 0; $i < count($array); $i++){
        if($countres[$i] > $max){
            $max = $countres[$i];
        }
    }
    return $max;
}
