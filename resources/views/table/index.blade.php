<!DOCTYPE html>
<html>
<head>
	<title>title</title>
</head>
<body>
	<H1>Таблица</H1>
	@foreach ($table as $value)
		<li>
			<a href="table/{{ $value->id }}">{{ $value->body }}</a>
		</li>
	@endforeach
</body>
</html>