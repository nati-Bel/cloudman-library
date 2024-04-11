<article class="rounded-md border-slate-300 bg-white p-4 shadow-sm mb-4 w-5/12">
    <div class="flex gap-6">
        
        <img class="w-1/3" src="{{ asset('assets/covers/' . $loan->book->cover_url) }}"  alt="book_cover">
        
        <div class="flex flex-col">
            <div class="flex flex-col gap-2">
                <h3 class="font-semibold text-gray-700 text-lg dark:text-gray-400">{{$loan->book->title}}</h3>
                <span class="font-normal text-gray-700 italic">por {{$loan->book->author}}</span>
                <span class="font-normal text-gray-700">prestado a : {{$loan->borrowed_by}}</span>
                <span class="font-normal text-gray-700">Formato : {{$loan->book->format}}</span>
                <span class="font-normal text-gray-700">Prestado el : {{$loan->checkout_date}}</span>
                <span class="font-normal text-gray-700">Prestado hasta : {{$loan->due_date}}</span>
            </div>
            
            {{$slot}}
              
        </div>
    </div>
   
</article>