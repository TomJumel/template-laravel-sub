<div class="bg-white h-20 p-4">
    <div class="flex justify-between lg:w-6/12 md:w-2/3 w-full lg:m-auto items-center h-full">
        <a href="{{ route('app.post.create') }}" class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"/>
            </svg>
            <div class="hidden lg:flex">
                Déposer une annonce
            </div>
        </a>
        <div class="grow flex justify-center">
            <a href="{{ route('app.home') }}" style="height: 2rem">
                {{--            <img src="https://acseo.ams3.digitaloceanspaces.com/tf1-sos-villages/build/images/logo.svg" alt="logo">--}}
{{--                <span class="scale-125"><span class="text-white bg-primary-500 rounded p-1">SOS</span> Asso</span>--}}
                <img src="{{asset('img/logo.png',false)}}" alt="logo" class="h-full" >
            </a>
        </div>
        <a href="{{ route('app.search',['type'=>'all']) }}" class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            <div class="hidden lg:flex">
                Voir les annonces
            </div>
        </a>
    </div>
</div>
