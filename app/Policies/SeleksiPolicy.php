<?php
namespace App\Policies;

use App\Models\Seleksi;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SeleksiPolicy
{

    public function viewAny(User $user): bool
    {
        return $user->hasRole('Admin');
    }
    public function view(User $user, Seleksi $seleksi): bool
    {
        return $user->hasRole('Admin');
    }
    public function create(User $user): bool
    {
        return $user->hasRole('Admin');
    }
    public function update(User $user, Seleksi $seleksi): bool
    {
        return $user->hasRole('Admin');
    }
    public function delete(User $user, Seleksi $seleksi): bool
    {
        return $user->hasRole('Admin');
    }
    public function restore(User $user, Seleksi $seleksi): bool
    {
        return $user->hasRole('Admin');
    }
    public function forceDelete(User $user, Seleksi $seleksi): bool
    {
        return $user->hasRole('Admin');
    }
}


// tidak ada di materi