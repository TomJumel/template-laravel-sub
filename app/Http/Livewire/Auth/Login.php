<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        //decode the errors message
        $error = request()->get('errors');
        if ($error !== null) {
            try {
                $error = base64_decode($error);
            } catch (\Exception $e) {
                $error = "Erreur impossible de vous authentifier";
            }
        }
        return view('livewire.auth.login', ['errors' => $error])->layout('filament::components.layouts.card', [
            'title' => __('filament::login.title'),
        ]);
    }
}
