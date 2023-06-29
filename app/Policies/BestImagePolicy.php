<?php

namespace App\Policies;

use App\Models\User;

class BestImagePolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function vote(User $user)
    {
        return $user->isVoter();
    }
}
