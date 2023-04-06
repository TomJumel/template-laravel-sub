<div class="flex flex-col gap-4">
    @if(isset(request()->error))
        <div class="bg-danger border border-danger-400 text-danger-700 px-4 py-3 rounded relative rounded-lg" role="alert">
            <strong class="font-bold">Erreur !</strong>
            <span class="block sm:inline">{{ base64_decode(request()->error) }}</span>
        </div>
    @endif
    <a class="filament-button filament-button-size-md inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset min-h-[2.25rem] px-4 text-sm text-white shadow focus:ring-white border-transparent bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 w-full"
       href="{{"https://assos.utc.fr/bde/connect/api/auth/<name>/login?callback_url=".route('auth.cas.callback')."&key=".env('BDE_CONNECT_KEY')}}">
        Connexion BDE Connect
    </a>
</div>
