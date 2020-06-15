<?php
//處理查詢資料的請求
include_once "./base.php";
$str=$_GET['str'];
$db=new DB('students');
$query=$db->all([]," where name like '%$str%' ");
// $k=[];
foreach($query as $q){
    echo "<div>".$q['name']."-".$q['class_num']."-".$q['dept']."</div>";
    // $k[]=$q['name'];
}
// echo print_r($k);

?>