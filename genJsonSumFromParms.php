<?php
$px = $_GET["px"];
echo $px;
$py = $_GET["py"];
$dx = $_GET["dx"];
$dy = $_GET["dy"];
$bx = $_GET["bx"];
$by = $_GET["by"];

$sumx = $px + $dx + $bx;
$sumy = $py + $dy + $by;

$myData = [
	sumx =>  $sumx,
	sumy =>  $sumy
];

$JSON = json_encode($myData);
echo $JSON;
return;
?>