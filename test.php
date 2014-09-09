<?php
$px = $_GET("px");
$py = $_GET("py");
$dx = $_GET("dx");
$dy = $_GET("dy");
$bx = $_GET("bx");
$by = $_GET("by");

$sumx = $px + $dx + $bx;
$sumy = $py + $dy + $by;

$myArray = array('sumx' =>  $sumx, 'sumy' => $sumy);

echo json_encode(array);
return;
?>