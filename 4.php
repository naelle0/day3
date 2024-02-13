<?php

// $hari = date('D');


// if($hari = 'Mon'){
//     echo "Hari ini Upacara";
// }else{
//     echo "Tidak upacara";
// }

$hari = date('D');

$upacara = $hari == 'Mon' ? "hari ini upacara" : "tidak upacara";

echo "$upacara"
?>