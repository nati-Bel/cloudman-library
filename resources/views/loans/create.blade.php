<x-layout>

    <h2 class="text-2xl">Prestar libro</h2>

    <div class="my-5">
        <span class="text-lg">Titulo : </span>
        <span class="font-semibold text-lg">{{ $book->title }}</span>
    </div>
    
    <form action="{{route('loans.store')}}" class="max-w-1/2" method="POST">
        @csrf

        <div class="w-1/2">
            <input type="text" hidden name="book_id" value="{{$book->id}}">
            
            <div class="mb-5">
                <label for="borrowedBy" class="block mb-2 text-normal font-medium text-gray-900">Empleado</label>
                <input  type="text" 
                        name="borrowed_by" 
                        class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-slate-200 focus:border-slate-200 block w-full p-2.5" 
                        placeholder="Escribe el nombre del empleado" 
                        required>
                @error('borrowed_by')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5" x-data="{ checkoutDate: '', dueDate: '', showDueDate: false }">
                <label for="checkout_date" class="block mb-2 text-normal font-medium text-gray-900">Fecha de préstamo</label>
                <input  type="date" 
                        id="checkout_date" 
                        name="checkout_date" 
                        required 
                        class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-slate-200 focus:border-slate-200 block w-full p-2.5" 
                        x-model="checkoutDate" 
                        @input="showDueDate = true; dueDate = new Date(new Date(checkoutDate).getTime() + (30 * 24 * 60 * 60 * 1000)).toLocaleDateString()">
                @error('checkout_date')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                <p class="text-sm font-semibold mt-5" x-show="showDueDate">
                    Tienes 30 días para devolver el libro. Deberás devolverlo antes del <span x-text="dueDate"></span>.
                </p>
            </div>

            <x-submit-button >Prestar libro</x-submit-button>
            
        </div>

    </form>

</x-layout>