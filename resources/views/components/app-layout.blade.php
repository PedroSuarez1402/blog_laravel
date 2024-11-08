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
    @livewire('navigation')

    <div class="flex flex-grow">
        
        <main class="flex-grow p-8">
            {{ $slot }} aca se muestran los posts
        </main>
    </div>

    
</body>

</html>
