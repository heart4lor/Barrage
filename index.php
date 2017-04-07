//输入弹幕
<form action="Addmessage.php" method="post">
    消息：<input type="text" name="message"/>
    <input type="submit"  name="result" value="提交"/>
</form>



//输出弹幕
<?php
require_once ('Returnmessage.php');
echo "随机弹幕:$key";
