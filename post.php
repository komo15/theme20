<?php
$mail = $_POST['mail'];
$result = 'メールアドレスは' . $mail . 'です。';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>表示</title>
</head>
<body>
<p><?php echo $result; ?></p>
</body>
</html>
