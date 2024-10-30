<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <header class="bg-teal-300 flex justify-center py-10">
        <h1 class="text-3xl font-bold underline text-center">ABOUT ME</h1>
    </header>
    <header class="bg-teal-300 flex justify-center">
        <a href="{{ route('home') }}" class="text-1xl font-bold mx-5">Home</a>
        <a href="{{ route('login') }}" class="text-1xl font-bold mb-5">Login</a>
    </header>
</body>
</html>