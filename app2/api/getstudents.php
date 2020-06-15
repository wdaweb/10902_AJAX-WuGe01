<?php
include_once './base.php';
$classes=$_GET['class'];
// $classes='101';
$db=new DB("students");
$students=$db->q( "SELECT name,class_num,dept,nat_id from students where substring(`class_num`,1,3)=$classes" );
// echo print_r($students);
foreach($students as $s){
    echo "<div>".$s['name']."</div>";

}


?>