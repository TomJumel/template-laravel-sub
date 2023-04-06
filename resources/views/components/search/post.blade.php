<div class="w-full lg:flex mb-8 border-b-1 shadow-sm p-4 rounded-xl bg-white">
    <div class=" h-48 lg:h-auto lg:w-48 bg-center flex-none bg-contain bg-no-repeat rounded text-center overflow-hidden" style="background-image: url({{$post->asso->image}})" title="Cover of {{$post->asso->shortname}}">
    </div>
    <div class="bg-white rounded-b lg:rounded-b lg:rounded-r p-4 flex flex-col justify-between leading-normal">
        <div class="mb-8">
            <div class="text-gray-900 font-bold text-xl mb-2">{{$post->asso->shortname}} recherche un•e {{$post->role->name}}</div>
            <p class="text-gray-700 text-base">{!!nl2br(e(substr($post->description,0,200)))!!}</p>
        </div>
        <div class="flex items-center">
            <div class="text-sm">
                <p class="text-gray-900 leading-none">{{$post->posted_by}}</p>
                <p class="text-gray-600">Posté le {{Date::parse($post->created_at)->format('j F, Y')}}</p>
            </div>
        </div>
    </div>
</div>
