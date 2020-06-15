<?php
//處理新增資料的請求
include_once "./base.php";
if(!empty($_POST)){
    echo "1";
    
    // echo "<pre>";
    // echo print_r($_POST);
    // echo "</pre>";
    
    $row=[];
    $row['uni_id']=$_POST['uni_id'];
    $row['class_num']=$_POST['class_num'];
    $row['name']=$_POST['name'];
    $row['birthday']=$_POST['birthday'];
    $row['nat_id']=$_POST['nat_id'];
    $row['addr']=$_POST['addr'];
    $row['parent']=$_POST['parent'];
    $row['tel']=$_POST['tel'];
    $row['dept']=$_POST['dept'];
    $row['grad_at']=$_POST['grad_at'];

    $db=new DB('students');
    $db->save($row);
    
}else{
    echo "2";
}




?>