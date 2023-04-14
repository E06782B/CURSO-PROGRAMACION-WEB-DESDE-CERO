<?php
$finalSizeArray = [];
    for($i=0; $i<(count($_POST)/2); $i++) {
        $finalSizeArray[$i] = ($_POST["productHeight$i"]*$_POST["productWidth$i"]);
}
array_multisort($finalSizeArray, SORT_DESC);
$i = 1;
foreach($finalSizeArray as $value) {
    echo "El orden de tamaños es $value<br>";
    $i++;
}