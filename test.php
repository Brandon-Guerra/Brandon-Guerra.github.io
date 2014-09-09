<?php
$px = (int)$_GET("px");
$py = (int)$_GET("py");
$dx = (int)$_GET("dx");
$dy = (int)$_GET("dy");
$bx = (int)$_GET("bx");
$by = (int)$_GET("by");

$sumx = $px + $dx + $bx;
$sumy = $py + $dy + $by;

$myArray = array('sumx' =>  $sumx, 'sumy' => $sumy);

echo json_encode(array);
return;
?>