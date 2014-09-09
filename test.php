<?php
(int)$px = $_GET("px");
(int)$py = $_GET("py");
(int)$dx = $_GET("dx");
(int)$dy = $_GET("dy");
(int)$bx = $_GET("bx");
(int)$by = $_GET("by");

$sumx = $px + $dx + $bx;
$sumy = $py + $dy + $by;

$myData = array(
	'sumx' =>  $sumx,
	'sumy' =>  $sumy
);
echo "hello";
//echo json_encode($myData);
return;
?>