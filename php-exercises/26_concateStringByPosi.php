<?php
error_reporting(0);
$str1="A C E G 1 2 3 4 5";
$str2="B D F J k s k";
$max=0;
if(strlen($str1)>strlen($str2)){
    $max=strlen($str1);
}else{
    $max=strlen($str2);
}
$final="";
for($i=0;$i<$max;$i++){
    $final = "$final$str1[$i]$str2[$i]";
}
echo $final;

?>