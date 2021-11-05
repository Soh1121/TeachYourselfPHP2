<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	print abs(-100);
	print '<br />';
	print base_convert(100, 2, 10);
	print '<br />';
	print ceil(1234.56);
	print '<br />';
	print floor(1234.56);
	print '<br />';
	print fmod(10.5, 5);
	print '<br />';
	print max(1, 5, 3);
	print '<br />';
	print min(1, 5, 3);
	print '<br />';
	print mt_rand(5, 10);
	print '<br />';
	print pow(2, 4);
	print '<br />';
	print round(123.456, 2);
	print '<br />';
	print sqrt(10000);
	print '<br />';
	print cos(deg2rad(60));
	print '<br />';
	print sin(deg2rad(30));
	print '<br />';
	print tan(deg2rad(45));
	print '<br />';
	print deg2rad(180);
	print '<br />';
	print exp(1);
	print '<br />';
	print log10(100);
	print '<br />';
	print log(125, 5);
	print '<br />';
	?>
</body>

</html>