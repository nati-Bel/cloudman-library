<x-layout>

    <h2 class="text-3xl font-semibold text-center">Libros disponibles</h2>

    <div x-data="">
        <form action="{{route('books.index')}}" method="GET" x-ref="searchForm" class="flex justify-center items-center gap-4 mt-5">
            <div class="relative w-1/3">
                <button type="button" class="absolute top-0 right-0 flex h-full items-center pr-2"
                    @click="$refs['searchInput'].value=''; $refs['searchForm'].submit();">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-4 w-4 text-slate-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <input name="search" x-ref="searchInput" value="{{request('search')}}" class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-slate-200 focus:border-slate-200 block w-full p-2.5 pr-8" placeholder="Busca por titulo o autor" />
            </div>
            <x-submit-button>Buscar</x-submit-button>
        </form>
    </div>

    <div class="mt-10 flex flex-wrap gap-8 justify-center">
        
        @forelse ($books as $book)
            
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

        @empty
        
            <div class="rounded-md border border-dashed border-slate-300 p-8">
                <div class="text-center font-medium">
                    No hay libros disponibles!
                </div>
            </div>

        @endforelse
        
    </div>

</x-layout>