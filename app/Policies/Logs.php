<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\FilamentUserLocalModel;
use Filament\Facades\Filament;
use Illuminate\Auth\Access\HandlesAuthorization;
use Rabol\FilamentLogviewer\Models\LogFile;

class Logs
{
    use HandlesAuthorization;

    private function can(){
        return Filament::auth()->user()->havePermission('*');
    }

    public function view(FilamentUserLocalModel $user, LogFile $logFile)
    {
        return $this->can();
    }

    public function viewAny(User $user)
    {
        return $this->can();
    }

    public function create(User $user, LogFile $logFile)
    {
        return $this->can();
    }

    public function update(User $user, LogFile $logFile)
    {
        return $this->can();
    }

    public function delete(User $user, LogFile $logFile)
    {
        return $this->can();
    }
    public function deleteAny(User $user)
    {
        return $this->can();
    }
}
