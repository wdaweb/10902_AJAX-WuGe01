<?php
include_once "./base.php";
$db=new DB("students");
$c=$db->q("SELECT substring(`class_num`,1,3) as '班級' FROM `students` group by substring(`class_num`,1,3)");
// echo print_r($c);
foreach($c as $cc){
    echo "<option value=";
    echo $cc[0];
    echo ">";
    echo $cc[0];
    echo "</option>";
}

?>

<!-- <option value=""></option> -->