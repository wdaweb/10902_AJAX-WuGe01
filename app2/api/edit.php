<?php
include_once "base.php";
$db=new DB("students");
if(!empty($_POST['id'])){
    $date=[];
    $date['id']=$_POST['id'];
    $date['uni_id']=$_POST['uni_id'];
    $date['class_num']=$_POST['class_num'];
    $date['name']=$_POST['name'];
    $date['birthday']=$_POST['birthday'];
    $date['nat_id']=$_POST['nat_id'];
    $date['addr']=$_POST['addr'];
    $date['parent']=$_POST['parent'];
    $date['tel']=$_POST['tel'];
    $date['dept']=$_POST['dept'];
    $date['grad_at']=$_POST['grad_at'];
    $AA=$db->save($date);
    echo $AA;
}else{
    $id=$_GET['id'];
    $row=$db->find($id);

?>

     <form>
      <ul>
        <h4>編輯學生資料</h4>
        <li>學號:<input type="text" name="uni_id" id="uni_id2" value="<?=$row['uni_id'];?>"></li>
        <li>班級座號:<input name="class_num" id="class_num2" value="<?=$row['class_num'];?>"></li>
        <li>姓名:<input type="text" name="name" id="name2" value="<?=$row['name'];?>"></li>
        <li>出生年月日:<input type="text" name="birthday" id="birthday2" value="<?=$row['birthday'];?>"></li>
        <li>身份證字號:<input type="text" name="nat_id" id="nat_id2" value="<?=$row['nat_id'];?>"></li>
        <li>住址:<input type="text" name="addr" id="addr2" value="<?=$row['addr'];?>"></li>
        <li>父母:<input type="text" name="parent" id="parent2" value="<?=$row['parent'];?>"></li>
        <li>電話:<input type="text" name="tel" id="tel2" value="<?=$row['tel'];?>"></li>
        <li>科別:<input type="text" name="dept" id="dept2" value="<?=$row['dept'];?>"></li>
        <li>畢業國中:<input type="text" name="grad_at" id="grad_at2" value="<?=$row['grad_at'];?>"></li>
      </ul>
      <input type="button" value="確認修改" onclick="update(<?=$id;?>)">
      <input type="button" value="取消修改" onclick="killAll()">
      </form>
<?php
}
?>