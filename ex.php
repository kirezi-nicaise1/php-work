<?php
$marks=array("10","9","6","10","2","7","5","10","10","10");
$sum=array_sum($marks);
$n=sizeof($marks);
$average=$sum/$n;
echo"the students marks are".$average;
?>