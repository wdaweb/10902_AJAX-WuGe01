<div id="noBlock">
    <form> 
      <ul>
        <h4>新增學生資料</h4>
        <li>學號:<input type="text" name="uni_id" id="uni_id"></li>
        <li>班級座號:<select name="class_num" id="class_num"></select></li>
        <li>姓名:<input type="text" name="name" id="name"></li>
        <li>出生年月日:<input type="text" name="birthday" id="birthday"></li>
        <li>身份證字號:<input type="text" name="nat_id" id="nat_id"></li>
        <li>住址:<input type="text" name="addr" id="addr"></li>
        <li>父母:<input type="text" name="parent" id="parent"></li>
        <li>電話:<input type="text" name="tel" id="tel"></li>
        <li>科別:<input type="text" name="dept" id="dept"></li>
        <li>畢業國中:<input type="text" name="grad_at" id="grad_at"></li>
      </ul>
      <input type="button" value="確認新增" onclick="create()">
      <input type="button" value="取消修改" onclick="killAll()">
    </form>
  </div>