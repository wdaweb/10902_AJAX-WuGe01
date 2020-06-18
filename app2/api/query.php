<?php
//處理查詢資料的請求
include_once "./base.php";
$str=$_GET['str'];
$db=new DB('students');
$query=$db->all([]," where name like '%$str%' ");
// foreach($query as $q){
//     echo "<div>結果:".$q['name']."-".$q['class_num']."-".$q['dept'];
//     echo "<input type='button' onclick='getUpdateForm(".$q['id'].")' value='更新'>";
//     echo "<input type='button' onclick='del(".$q['id'].")' value='刪除'>";
//     echo "</div>";
// }
$date=[];
    foreach($query as $q){
        $date[]=[
            'id'=>$q['id'],
            'grad_at'=>$q['grad_at'],
            'name'=>$q['name'],
            'class_num'=>substr($q['class_num'],0,3),
            'num'=>substr($q['class_num'],3,2),
            'dept'=>mb_substr($q['dept'],0,-2,'utf8')
        ];

    }
echo json_encode($date);
?>
