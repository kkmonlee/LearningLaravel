<html>
<head>
    <title>Atul's Laravel</title>
</head>
<body>
<ul>
    // Blade template engine syntax
    @foreach ($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
</ul>
</body>
</html>