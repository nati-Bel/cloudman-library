<x-layout>
    <h1 class="my-16 text-center text-3xl font-medium text-slate-600">Iniciar sesión</h1>
    <div class="flex justify-center">

        <article class="w-1/2 rounded-md border-slate-300 bg-white p-4 shadow-sm object-center py-8 px-16">
            <form action="{{ route('auth.store')}}" method="POST">
            @csrf
    
                <x-input name="email">E-mail *</x-input>
                <x-input name="password" type="password">Contraseña *</x-input>
                <div class="mb-8 flex justify-between text-sm font-medium">
                <div>
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" name="remember" class="rounder-sm border border-slate-400">
                        <label for="remember">Guardar sesión</label>
                    </div>
                    <div></div>
                </div>
                <div>
                    <a href="#" class="text-indigo-600 hover:underline">Contraseña olvidada?</a>
                </div>
            </div>
            <button type="submit" class="w-full rounded-md border border-slate-300 bg-slate-200 px-2.5 py-1.5 text-center text-sm font-semi-bold text-black shadow-sm hover:bg-slate-100">
            Iniciar</button>
        
            </form>
        </article>
    </div>
</x-layout>