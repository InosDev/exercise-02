
<?php

$arr = [10, 5];

fwrite($stdin, $arr[0], $arr[1]);

if (is_int($arr[0]) && is_int($arr[1])) {

    if ($arr[1] = 0 ){

        fscanf(STDERR, "%d\n", "Делить на 0 нельзя");
        
    } else { 

        $quotient = $arr[0] / $arr[1];

        fwrite($stdout, $quotient);
    }

} else {
    fscanf(STDERR, "%d\n", "Введите, пожалуйста, число");
}