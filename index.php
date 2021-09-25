<?php

$dice = mt_rand(1,6);
$dice2 = mt_rand(1,6);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>サイコロ</title>
</head>
<body>
  <h1>サイコロ</h1>
  <p>
    サイコロの目は「<?php echo $dice; ?>』「<?php echo $dice2; ?>』でした!!
    <?php if ($zorome): ?>
      ゾロ目です！！！！
    <?php endif; ?>  
  </p>
  <p><a href="<?php echo $_SERVER["SCRIPT_NAME"];?>">もう一度！</a></p>
</body>
</html>