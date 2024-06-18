<?php
namespace App\Policies;

use App\Models\Formulir;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class FormulirPolicy
{

    public function viewAny(User $user): bool
    {
        return $user->hasRole('Admin');
    }
    public function view(User $user, Formulir $formulir): bool
    {
        return $user->hasRole('Admin');
    }
    public function create(User $user): bool
    {
        return $user->hasRole('Admin');
    }
    public function update(User $user, Formulir $formulir): bool
    {
        return $user->hasRole('Admin');
    }
    public function delete(User $user, Formulir $formulir): bool
    {
        return $user->hasRole('Admin');
    }
    public function restore(User $user, Formulir $formulir): bool
    {
        return $user->hasRole('Admin');
    }
    public function forceDelete(User $user, Formulir $formulir): bool
    {
        return $user->hasRole('Admin');
    }
}

// tidak ada di materi