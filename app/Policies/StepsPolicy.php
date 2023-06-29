<?php

namespace App\Policies;

use App\Models\User;

class StepsPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function approve(User $user)
    {
        return $user->isAdmin();
    }
}
