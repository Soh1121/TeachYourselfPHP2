<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>ユーザ定義関数</title>
</head>

<body>
	<?php
	function getTriangleArea(float $base, float $height): float
	{
		return $base * $height / 2;
	}

	print getTriangleArea(...[10, 5]);
	?>
</body>

</html>