<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Laravel App</title>
</head>
<body>
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif
    {{ $slot }}
</body>
</html>