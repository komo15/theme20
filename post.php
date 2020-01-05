<?php
$mail = $_POST['mail'];
if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
	$result = 'メールアドレスは' . $mail . 'です。';
} else {
	$result = 'メールアドレスではありません';
}
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
