<x-layout>
<h2 class="text-2xl text-center">Libros disponibles</h2>

<div class="mt-10 flex flex-wrap gap-8 justify-center">
    @foreach ($books as $book)
        
        <x-book-card :$book :src="asset('assets/covers/' . $book->cover_url)">
            <div class="flex flex-col gap-2">
                <h3 class="font-bold text-lg">{{$book->title}}</h3>
                <p class="italic font-semibold">por {{$book->author}}</p>
                <p class="mt-3">
                    <span>Formato : </span><span class="italic">{{$book->format}}</span>
                </p>
            </div>
            <div class="flex justify-left content-center">
                <x-link-button :href="route('loans.create', $book)">PRESTAR</x-link-button>
            </div>   
        </x-book-card>
    @endforeach
    
    
</div>


</x-layout>