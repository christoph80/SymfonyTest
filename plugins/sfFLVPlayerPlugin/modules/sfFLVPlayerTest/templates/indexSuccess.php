<?php use_helper('sfFLVPlayer'); ?>


<div id="help_movie">

<br />
<h3>Flash movie - Single file</h3>
<br />
<?php


FLVPlayer('p1',
 array (
	'flv' => $movie,
	'title'	=> 'Test movie',
	'width'	=> 320,
	'height'	=> 240,
	'showopen'	=> 0,
	'showstop'	=> 1,
	'showvolume'=> 1,
),
array(
	'width'	=> 320,
	'height'	=> 240,));
?>


<br />
<h3>Flash movie - Multiple files</h3>
<br />
<?php


FLVPlayer('p2',
 array (
	'flv' 				=> array($movie,$movie,$movie),
	'title'				=> 'Test movie 1|Test movie 2|Test movie 3',
	'width'				=> 350,
	'height'			=> 200,
	'showstop'			=> 1,
	'showvolume'		=> 1,
	'bgcolor1'			=>'8282B0',
	'bgcolor2'  		=>'72729A',
	'playercolor'		=>'72729A',
	'buttoncolor'		=>'C69717',
	'buttonovercolor'	=>'E9B21A',
	'slidercolor1'		=> 'CD9D17',
	'slidercolor2'		=> 'B08614',
	'sliderovercolor'	=> 'E9B21A',
	'loadingcolor'		=>'E9B21A',
),
array(
	'width'	=> 350,
	'height'	=> 200,));
?>

<br />
<h3>Flash movie - Multiple files and text configuration file</h3>
<br />
<?php


FLVPlayer('p3',
 array (
	'config' 	=> $config_txt,
),
array(
	'width'		=> 320,
	'height'	=> 240,));
?>


<br />
<h3>Flash movie - Multiple files and xml configuration file</h3>
<br />
<?php
FLVPlayer('p4',
 array (
	'configxml' 	=> $config_xml,
),
array(
	'width'		=> 320,
	'height'	=> 240,));
?>


</div>


