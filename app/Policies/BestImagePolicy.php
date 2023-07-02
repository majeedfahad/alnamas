<?php

namespace App\Policies;

use App\Models\BestImage;
use App\Models\BestImage\Interaction;
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

    public function vote(User $user, BestImage $image): bool
    {
        return $user->isVoter() &&
            Interaction::userNotVotedToday($user);
    }

    public function unvote(User $user, BestImage $image): bool
    {
        return $user->isVoter() &&
            $image->isVotedBy($user);
    }

    public function delete(User $user, BestImage $image)
    {
        return $image->user_id === $user->id;
    }
}
