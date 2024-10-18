<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-300 min-h-screen flex flex-col">
    <x-header></x-header>
    
    <div class="flex flex-grow">
        <x-sidebar></x-sidebar>
        <main class="flex-grow p-8">
            {{$slot}}
        </main>
    </div>

    <x-footer></x-footer>
</body>

</html>