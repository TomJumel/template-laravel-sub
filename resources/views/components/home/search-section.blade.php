<div
    class="bg-center bg-no-repeat bg-cover" style='background-image: url("https://assos.utc.fr/bde/sosassos/api/image?url={{($photo->url)}}")'>
    <div
        class="w-full h-144 flex flex-col
        justify-center items-center
             bg-primary-600/30 backdrop-brightness-75 text-white gap-4">
        <p class="font-bold text-2xl text-center">Sos Assos<br> Les assos n'attendent que toi !</p>
        {{--seacrh bar--}}
        <div class="lg:w-3/6 w-full p-4">
            <x-search :search="''" />
        </div>
        <a href="https://www.facebook.com/arthur.papics/" target="_blank">
        <div class="text-sm flex flex-row gap-x-1"><p class="-translate-y-0.5">📸</p><p>{{$photo->credit}}</p></div>
        </a>
    </div>
</div>
