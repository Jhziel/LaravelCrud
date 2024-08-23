<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaravelCrud</title>
    @vite(['resources/css/app.css', 'resources/css/inputField.css'])
</head>

<body class="bg-slate-900 px-28">
    @session('message')
        <div>
            {{ session('message') }}
        </div>
    @endsession
    {{ $slot }}
</body>

</html>
