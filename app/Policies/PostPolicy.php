<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

use function PHPUnit\Framework\returnSelf;

class PostPolicy
{
    use HandlesAuthorization;
/*
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Post $post)
    {
        if($user->role === 'admin') return true ; 

        return $user->id === $post->user_id ; 
    }

  
}