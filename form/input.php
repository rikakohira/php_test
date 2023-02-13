<?php
// if(!empty($_GET)){
//   echo '<pre>';
//   var_dump($_GET); 
//   echo '<pre>';
// }

if(!empty($_POST)){
  echo '<pre>';
  var_dump($_POST); 
  echo '<pre>';
}

?>

<!DOCTYPE html>
<meta charset="utf-8">
<head></head>
<body>

<form method="POST" action="input.php">
  氏名  
  <input type="text" name="your_name">
  <br/>
  <br/>
  <input type="checkbox" name="sports[]" value="野球">野球
  <input type="checkbox" name="sports[]" value="サッカー">サッカー
  <input type="checkbox" name="sports[]" value="バスケ">バスケ
  <br/>
  <br/>
  <input type="submit" value="送信">
</form>
</body>
</html>