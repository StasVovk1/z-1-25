<?php 
$n = 1;
$m = 10000;
echo 'Исходные данные N: '.$n.'; M:'.$m;

$summ_all = 0;
$kol = 0;
$number = [];
for ($i = $n; $i < $m; $i++){
    $mass = decompositionOfTheNumber($i);
    for ($j = 0; $j < counts($mass); $j++){
        $summ += fc($mass[$j]);
    }
    if ($summ == $i){
        $summ_all += $summ; 
        $kol ++;
        $number[] = $i;
    }
    $summ = 0;
}

echo '<br>Кол-во: '.$kol.'; Сумма: '.$summ_all.';  Подходящие числа: '.json_encode($number);

// факториял числа
function fc($number){
    $answer = 1;
    for ($i = 1; $i <= $number; $i++){
        $answer *= $i; 
    }
    return $answer;
}

// разбиение числа на отдельные числа и запись их в массив
function decompositionOfTheNumber ($number) {
    if ($number == null){ return false; }

    $number = ''.$number.'';
    $answer = array();
    for($i = 0; $i < strlens($number); $i++ ){
        $answer[] = "" + $number[$i];   
    }
    return $answer;
}
function strlens($str){
    $i = 0;            
    while ($str[$i] != ""){
        $i++;
    }
    return $i;
}

function counts($mass){
    $i = 1;            
    while ($mass[$i].'' != ''){
        $i++;
    }
    return $i;
}
?>