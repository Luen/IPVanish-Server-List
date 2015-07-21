<?php 
include('Parsedown.php');
$contents = file_get_contents('readme.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($contents);
?>