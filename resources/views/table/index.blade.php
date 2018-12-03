<!DOCTYPE html>
<html>
<head>
	<title>title</title>
</head>
<body>
	<H1>Таблица</H1>
	@foreach ($table as $value)
		<li>{{ $value->body }}</li>
	@endforeach
</body>
</html>