
<?php

$stdin = fopen("php://stdin", "r");
$N1 = fgets($stdin);
$N2 = fgets($stdin);
fclose($stdin);

if (is_numeric($N1) && is_numeric($N2)) {

    if ($N2 === 0 ){

        echo "Делить на 0 нельзя";
        
    } else { 
    	

        $quotient = $N1 / $N2;

        fwrite($stdout, $quotient);
    }

} else {
    echo "Введите, пожалуйста, число";
}