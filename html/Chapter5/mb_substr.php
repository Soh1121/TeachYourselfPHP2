<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	mb_internal_encoding('UTF-8');
	$str = 'WINGSプロジェクト';

	print mb_substr($str, 5, 2);
	print mb_substr($str, 5);
	print mb_substr($str, 5, -4);
	print mb_substr($str, -6, 2);
	?>
</body>

</html>