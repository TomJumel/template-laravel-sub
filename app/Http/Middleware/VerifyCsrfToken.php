<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/filament/*',
        '/livewire/*'
    ];

    public function handle($request, Closure $next)
    {
        $subfolder = env('SUBFOLDER', '');
        if ($subfolder) {
            $this->except = array_map(function ($item) use ($subfolder) {
                return $subfolder . $item;
            }, $this->except);
        }
        return parent::handle($request, $next);
    }


}
