@php use App\Models\AssoSearch; @endphp
<x-layout>
    <x-home.search-section :photo="$photo"></x-home.search-section>
    <div class="p-4">
        <div class="flex flex-col items-center mb-6">
            <p class="text-xl font-bold">Dernières annonces</p>
        </div>
        <div class="flex flex-col lg:flex-row items-center justify-center m-auto gap-4 flex-nowrap mb-4">
            @foreach($posts as $post)
                <a href="{{route('app.post',['id'=>$post->id])}}">
                    <div class="max-w-xs rounded overflow-hidden shadow-sm">
                        <img class="w-full" src="{{$post->asso->image}}"
                             alt="Image of {{$post->asso->shortname}}">
                        <div class="px-6 py-4 grow items-start">
                            <p class="text-gray-400 text-sm">Le {{$post->created_at->format('d/m/Y')}}</p>
                            <div class="font-bold text-l mb-2">{{$post->role->name}} • {{$post->asso->shortname}}</div>
                            <p class="text-gray-700 text-base">
                                {!!nl2br(e(Str::limit($post->description, 50, '...')))!!}
                            </p>
                            <p class="text-primary-600 text-end">Voir plus</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    {{--    RECHERCHER PAR poles--}}
    <div class="p-4 bg-primary-800">
        <div class="flex flex-col items-center mb-6">
            <p class="text-xl font-bold text-white">Rechercher par pôle</p>
            <p class="text-sm text-gray-200">Selectionnez parmi les pôles</p>
        </div>
        <div class="grid gap-4 w-full lg:w-3/4 m-auto lg:grid-cols-2 md:grid-cols-2 grid-cols-1">
            @foreach($poles as $pole)
                <a href="{{route('app.search',['assoc_pole'=>$pole->id])}}"
                   class="rounded shadow-sm p-2 m-auto w-full bg-white">
                    <img src="{{$pole->image}}" alt="Logo du pôle {{$pole->name}}"
                         class="h-32 object-cover place-items-center">
                </a>
            @endforeach
        </div>
    </div>
</x-layout>
