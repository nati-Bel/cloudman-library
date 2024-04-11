<article class="rounded-md border-slate-300 bg-white p-4 shadow-sm mb-4 w-5/12">
    <div class="flex gap-6">
        
        <img class="w-1/3" src="{{ asset('assets/covers/' . $book->cover_url) }}"  alt="book_cover">
        
        <div class="flex flex-col">
            <div class="flex flex-col gap-2">
                <h3 class="font-semibold text-lg dark:text-gray-400">{{$book->title}}</h3>
                <span class="font-normal italic">por {{$book->author}}</span>
                <span class="font-normal">Formato : {{$book->format}}</span>
            </div>
            
            {{$slot}}
              
        </div>
    </div>
   
</article>