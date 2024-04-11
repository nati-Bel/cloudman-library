<x-layout>
<h2 class="text-2xl text-center">Libros disponibles</h2>

<form action="{{route('books.index')}}" method="GET">
    <div class="flex justify-center items-center gap-4 mt-5">
        <input name="search" value="{{request('search')}}" class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-slate-200 focus:border-slate-200 block w-1/3 p-2.5" placeholder="Busca por titulo o autor" />
        <x-submit-button>Buscar</x-submit-button>
    </div>
    
</form>

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