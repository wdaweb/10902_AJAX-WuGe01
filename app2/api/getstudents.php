<?php
include_once './base.php';
$classes=$_GET['class'];
// $classes='101';
$db=new DB("students");
$students=$db->q( "SELECT id,name,class_num,dept,nat_id from students where substring(`class_num`,1,3)=$classes" );
// echo print_r($students);
foreach($students as $s){
    echo "<div>".$s['name'];
    echo "<input type='button' onclick='getUpdateForm(".$s['id'].")' value='更新'>";
    echo "<input type='button' onclick='del(".$s['id'].")' value='刪除'>";
    echo "</div>";
}


?>