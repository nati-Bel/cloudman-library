<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.tailwindcss.com/3.3.0"></script>
     <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.8/dist/cdn.min.js"></script>
    <title>Cloudman Library</title>
</head>
<body class="mt-10 bg-slate-200">

    <nav class="mb-8 mx-16 flex justify-between items-center text-lg font-medium">
        <h1 class="text-3xl">Biblioteca Cloudman</h1>

        <ul class="flex space-x-2 text-xl ">
            <li>
                <a href="{{route('books.index')}}">Biblioteca</a>
            </li>
            <li>|</li>
            <li>
                <a href="{{route('loans.index')}}">Prestados</a>
            </li>
        </ul>

    </nav>

    <div class="mx-auto max-w-7xl">
        
        @if (session('success'))

                <div role="alert" class="my-8 rounded-md border-l-4 border-green-300 bg-green-100 p-4 text-green-700 opacity-75">
                    <p class="font-bold">Éxito!</p>
                    <p>{{ session('success')}}</p>
                </div>

        @endif

        {{$slot}}
        
    </div>
    
</body>
</html>