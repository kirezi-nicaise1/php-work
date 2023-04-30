<?php
function factorial(&$num){
    $val=1;
    if($num==0){
        echo"the factorial is 1";
    }
    for($i=1;$i<=$num;$i++){
        $val*=$i;
    }
    echo"the factorial of $num is $val";
}
$num=5;
factorial($num)
?>
