<x-layout>

    <h2 class="text-2xl text-center">Libros prestados</h2>
    <div class="mt-10 flex flex-wrap gap-8 justify-center">
       
    @foreach ($loans as $loan)
            
            <x-book-card :$loan :src="asset('assets/covers/' . $loan->book->cover_url)">
                
                <div class="flex flex-col gap-2 font-normal text-gray-700">
                    <h3 class="font-bold text-lg">{{$loan->book->title}}</h3>
                    <p class="italic font-semibold">por {{$loan->book->author}}</p>
                    <p class="mt-3">
                        <span>Formato : </span><span class="italic">{{$loan->book->format}}</span>
                    </p>
                    <p>
                        <span>Prestado a : </span><span class="italic">{{$loan->borrowed_by}}</span>
                    </p>
                    <p>
                        <span>Prestado el : </span><span class="italic">{{$loan->checkout_date}}</span>
                        <span>(Hace {{$loan->fromCheckoutToNow}} días)</span>
                    </p>
                    <p>
                        <span>Devolver el: </span>
                        @if ($loan->fromDueToNow > 0)
                            <span class="text-green-600">
                        @else
                            <span class="text-red-500">
                        @endif
                            <span class="italic">{{$loan->due_date}}</span>
                            <span class="font-semibold">({{$loan->fromDueToNow}} días)</span>
                        </span>
                    </p>

            
                </div>

                <div class="mt-5 flex justify-between items-center content-center">
                    <form action="{{route('loans.destroy', $loan)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <x-submit-button>Devolver</x-submit-button>
                    </form>

                    @if (($loan->fromDueToNow) < 0)
                        <x-tag class="text-red-500 text-center font-semibold border-red-500 bg-red-200 w-20">CADUCADO</x-tag>
                    @endif
                    
                </div>

            </x-book-card>

        @endforeach
        
    </div>

</x-layout>