<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>PHPの基本</title>
</head>

<body>
	<?php
	$members = [
		'山田太郎' => '千葉県府中市東町1-1-1',
		'掛谷翔太' => '広島県福岡市北町2-2-2',
		'日尾有宏' => '群馬県三次市南町3-3-3',
		'本多のぞみ' => '埼玉県豊田市西町4-4-4',
		'矢吹久美子' => '愛知県岡山市本町5-5-5',
	];
	print $members['山田太郎'];
	?>
</body>

</html>