<x-layout>
<h2 class="text-2xl text-center">Libros prestados</h2>

<div class="mt-10 flex flex-wrap gap-8 justify-center">
    @foreach ($loans as $loan)
        
        <x-loan-card :$loan>
            <div class="mt-10 flex justify-left content-center">
                <form action="{{route('loans.destroy', $loan)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-submit-button>Devolver</x-submit-button>
                </form>
                
            </div>   
        </x-loan-card>
    @endforeach
    
    
</div>


</x-layout>