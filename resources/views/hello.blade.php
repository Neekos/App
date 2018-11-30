<!DOCTYPE html>
<html>
<head>
	<title>title</title>
</head>
<body>
	<h1>Hello <?php foreach ($world as $worlds): ?>
				<?=$worlds;?>
			<?php endforeach ?></h1><!--Вывод массива-->
</body>
</html>