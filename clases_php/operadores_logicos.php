<?php 
 # OPERADOR AND 
 $varAnd1 = true;
 $varAnd2 = false;
 $resOpAnd = $varAnd1 AND $varAnd2;
 $resOpAnd = $varAnd1 && $varAnd2;
 var_dump($resOpAnd);

 $varOr1 = true;
 $varOr2 = true;
 #$resOpOr = $varOr1 or $varOr2;
 $resOpOr = $varOr1 || $varOr2;
 var_dump($resOpOr);

 $varXor1 = true;
 $varXor2 = true;
 $resOpXor = $varXor1 xor $varXor2;
 var_dump($resOpXor);

?>