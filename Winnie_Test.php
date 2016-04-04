<?php 
$ref = $Comments = ''; 
if(isset($_GET["ref"])) $ref = $_GET["ref"]; 
if(isset($_GET["Comments"])) $Comments = $_GET["Comments"]; 

if ($ref <> ''){ 
    $fp  = fopen('commentfile.txt', 'a+'); 
    fwrite($fp, $Comments."\n"); 
    fclose($fp); 
} 
?>
