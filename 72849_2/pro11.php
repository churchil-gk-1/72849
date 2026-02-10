<?php
$marks=40;
if($marks>=60){
    $grade="First Dividion";
}elseif($marks>=45){
    $grade="Second Division";
}elseif($marks>=33){
    $grade="Third Division";
}else{
    $grade="Fail";
}
echo "Student grade: $grade";
?>
