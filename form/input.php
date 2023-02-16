<?php

session_start();

header('X-FRAME-OPTIONS:DENY');

// if(!empty($_GET)){
//   echo '<pre>';
//   var_dump($_GET); 
//   echo '<pre>';
// }

if(!empty($_POST)){
  echo '<pre>';
  var_dump($_SESSION); 
  echo '<pre>';
}

function h($str){
	return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}



$pageFlag = 0;

if(!empty($_POST['btm_confirm'])){
  $pageFlag = 1;
}
if(!empty($_POST['btm_submit'])){
  $pageFlag = 2;
}
?>

<!DOCTYPE html>
<meta charset="utf-8">
<head></head>
<body>

<!-- 入力画面 -->
<?php if($pageFlag === 0) : ?>
<?php
if(!isset($_SESSION_['csrfToken'])){
  $csrfToken = bin2hex(random_bytes(32));
  $_SESSION['csrfToken'] = $csrfToken;
}
$token = $_SESSION['csrfToken']
?>
  <form method="POST" action="input.php">
    氏名  
    <input type="text" name="name" value="<?php if(!empty($_POST['name'])){echo h($_POST['name']);}?>">
    <br/>
    メールアドレス
    <input type="email" name="email" value="<?php if(!empty($_POST['email'])){echo h($_POST['email']);}?>">
    <br/>
    <input type="submit" name="btm_confirm" value="確認する">
    <input type="hidden"  name="csrf" value="<?php echo $token; ?>">
  </form>
<?php endif; ?>

<!-- 確認画面 -->
<?php if($pageFlag === 1) : ?>
<?php if($_POST['csrf'] === $_SESSION['csrfToken']) :?>
  <form method="POST" action="input.php">
    氏名  
    <?php echo h($_POST['name']) ;?>
    <br/>
    メールアドレス
    <?php echo h($_POST['email']) ;?>
    <br/>
    <input type="submit" name="back" value="戻る">
    <input type="submit" name="btm_submit" value="送信する">
    <input type="hidden"  name="name" value="<?php echo h($_POST['name']) ;?>">
    <input type="hidden"  name="email" value="<?php echo h($_POST['email']) ;?>">
    <input type="hidden"  name="csrf" value="<?php echo h($_POST['csrf']) ?>">
  </form>
<?php endif; ?>
<?php endif; ?>

<!-- 完了画面 -->
<?php if($pageFlag === 2) : ?>
<?php if($_POST['csrf'] === $_SESSION['csrfToken']) :?>
  送信が完了しました

<?php unset($_SESSION['csrfToken']); ?>
<?php endif; ?>
<?php endif; ?>
</body>
</html>

