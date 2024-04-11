<article class="rounded-md border-slate-300 bg-white p-4 shadow-sm mb-4 w-5/12">
    <div class="flex gap-6 h-full">
        
        <img class="w-1/3" src="{{$src}}" alt="book_cover">
        
        <div class="flex flex-col justify-between w-2/3">
            
                {{$slot}}
           
        </div>
    </div>
</article>