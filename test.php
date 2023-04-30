<!-- <?php
function test($array){
    echo"$array[0]+$array[1]=",$array[0]+$array[1];
}
$array=array(8,7);
echo test($array);
?> -->
<!-- <?php
function fact($num){
    $val=1;
    for($i=$num;$i>=1;$i--){
        $val*=$i;
    }
    return $val;
    echo $val;
}
$num=5;
fact($num);
echo fact($num);
?> -->

<?php
$numbers=array("Peter"=>"2","2","3","4");
foreach( $numbers as $value ) {
    echo"Value is=$value</br>";
    
}
// var_dump($numbers[2]);
// print_r($numbers[1]);