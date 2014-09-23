<?php

//generates one string from all text within file
readFileToString(){
	$file_as_string = file_get_contents('HenryJames.txt');
	$words = str_word_count($file_as_string, 1);
	$counts = array_count_values($words);
}

readFileToString();
?>