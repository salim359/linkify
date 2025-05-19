<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>linkify</title>
     @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body class="bg-black font-sans">
    <div class="min-h-screen flex flex-col">
        <x-navbar/>
        <main>{{ $slot }}</main>

    </div>
    <x-footer></x-footer>
</body>

</html>

