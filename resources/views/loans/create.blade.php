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
            <input type="text" id="" name="borrowed_by" required class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-slate-200 focus:border-slate-200 block w-full p-2.5" placeholder="Escribe el nombre del empleado">
        </div>
        <div class="mb-5">
            <label for="checkout_date" class="block mb-2 text-normal font-medium text-gray-900">Fecha de préstamo</label>
            <input type="date" id="" name="checkout_date" required class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-slate-200 focus:border-slate-200 block w-full p-2.5">
            <p class="text-sm font-semibold mt-5">Tienes 30 días para devolver el libro.</p>
            <p id="dueDate" class="text-sm font-semibold mt-5">Deberas devolverlo antes del.</p>
        </div>
        <x-submit-button >Prestar libro</x-submit-button>
    </div>
</form>


</x-layout>