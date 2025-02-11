
<?php

$stdin = fopen("php://stdin", "r");
$N1 = fgets($stdin);
$N2 = fgets($stdin);
fclose($stdin);

if (is_numeric($N1) && is_numeric($N2)) {

    if ($N2 = 0 ){

        fscanf(STDERR, "%d\n", "Делить на 0 нельзя");
        
    } else { 
    	

        $quotient = $N1 / $N2;

        fwrite($stdout, $quotient);
    }

} else {
    fscanf(STDERR, "%d\n", "Введите, пожалуйста, число");
}