<?php

namespace App\Models;

use Filament\Models\Contracts\HasName;
use Illuminate\Foundation\Auth\User as Authenticatable;

class FilamentUserLocalModel extends Authenticatable implements \Filament\Models\Contracts\FilamentUser, HasName
{
    private $admin = null;

    public function __construct($admin)
    {
        parent::__construct();
        $this->admin = $admin;
    }

    public function canAccessFilament(): bool
    {
        return $this->access !== null;
    }

    public function getFilamentName(): string
    {
        return $this->admin->fullName;
    }

    //haveField
    public function havePermission($permission): bool
    {
        return in_array($permission, $this->admin->access) || in_array('*', $this->admin->access);
    }

    public function getId()
    {
        return $this->admin->uid;
    }
}
