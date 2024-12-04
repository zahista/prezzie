<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-zinc-50">


    <div class="flex h-screen">

        <aside class="h-full w-1/3 flex flex-col justify-center">
            {{ $slot }}
        </aside>
        
        
        <main class="h-full w-2/3 flex justify-end">
            <img src="{{asset('images/pani.jpg')}}" class="h-full" alt="">
        </main>    
    </div>

</body>

</html>
