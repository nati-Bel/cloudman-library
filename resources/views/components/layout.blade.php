<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.tailwindcss.com/3.3.0"></script>
     <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.8/dist/cdn.min.js"></script>
    <title>Library Project</title>
</head>
<body class="mt-10 bg-slate-200">

    <nav class="mb-8 mx-16 flex justify-between items-end text-lg font-medium">
        <div class="flex justify-start items-end space-x-10">
            <a href="{{route('books.index')}}" class="text-4xl">Biblioteca</a>
            
            <ul class="flex space-x-2 text-2xl ">
                <li>
                    <a href="{{route('books.index')}}">Disponibles</a>
                </li>
                <li>|</li>
                <li>
                    <a href="{{route('loans.index')}}">Prestados</a>
                </li>
            </ul>
        </div>
        <ul class="flex space-x-2 text-xl ">
            @auth
                <li>
                    <p>Bienvenid@ {{auth()->user()->name}}!</p>
                </li>
                <li>|</li>
                <li>
                    <form method="POST" action="{{route('auth.destroy')}}">
                        @csrf
                        @method('DELETE')
                        <button>Salir</button>
                    </form>
                    
                </li>
            @else
                <li><a href="{{route('auth.create')}}">Iniciar sesión</a></li>
            @endauth
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