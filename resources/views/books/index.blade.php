<x-layout>
<h2 class="text-2xl text-center">Libros disponibles</h2>

<div class="mt-10 flex flex-wrap gap-8 justify-center">
    @foreach ($books as $book)
        
        <x-book-card :$book>
            <div class="mt-10 flex justify-left content-center">
                <x-link-button :href="route('loans.create', $book)">PRESTAR</x-link-button>
            </div>   
        </x-book-card>
    @endforeach
    
    
</div>


</x-layout>