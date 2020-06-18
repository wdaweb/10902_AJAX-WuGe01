<?php
//處理查詢資料的請求
include_once "./base.php";
$str=$_GET['str'];
$db=new DB('students');
$query=$db->all([]," where name like '%$str%' ");
// $k=[];
foreach($query as $q){
    echo "<div>結果:".$q['name']."-".$q['class_num']."-".$q['dept'];
    echo "<input type='button' onclick='getUpdateForm(".$q['id'].")' value='更新'>";
    echo "<input type='button' onclick='del(".$q['id'].")' value='刪除'>";
    echo "</div>";
    // $k[]=$q['name'];
}
// echo print_r($k);

?>
