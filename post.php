<?php
$mail = $_POST['mail'];
if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
	$result_filter = 'メールアドレスは' . $mail . 'です。';
} else {
	$result_filter = 'メールアドレスではありません';
}
if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $mail)) {
	$result_pregmatch = 'メールアドレスは' . $mail . 'です。';
} else {
	$result_pregmatch = 'メールアドレスではありません';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>表示v1.0</title>
</head>
<body>
<p>filter_varによれば<?php echo $result_filter; ?></p>
<p>正規表現によれば<?php echo $result_pregmatch; ?></p>
</body>
</html>
