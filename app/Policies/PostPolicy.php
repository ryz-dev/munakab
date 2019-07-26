<?php

namespace App\Policies;

use TCG\Voyager\Contracts\User;
use TCG\Voyager\Policies\BasePolicy;

class PostPolicy extends BasePolicy
{
    /**
     * Determine if the given model can be viewed by the user.
     *
     * @param \TCG\Voyager\Contracts\User $user
     * @param  $model
     *
     * @return bool
     */
    public function read(User $user, $model)
    {
        // Does this post belong to the current user?
        $current = $user->id === $model->author_id;

        return $current || $this->checkPermission($user, $model, 'read');
    }

    /**
     * Determine if the given model can be edited by the user.
     *
     * @param \TCG\Voyager\Contracts\User $user
     * @param  $model
     *
     * @return bool
     */
    public function edit(User $user, $model)
    {
        // Does this post belong to the current user?
        $current = $user->id === $model->author_id;

        // Does this user admin
        // dd($user->role_id);
        if ($user->role_id == 1) {
            return true;
        }
        return $current ;
        //|| $this->checkPermission($user, $model, 'edit');
    }

    /**
     * Determine if the given model can be deleted by the user.
     *
     * @param \TCG\Voyager\Contracts\User $user
     * @param  $model
     *
     * @return bool
     */
    public function delete(User $user, $model)
    {
        // Does this post belong to the current user?
        $current = $user->id === $model->author_id;
        if ($user->role_id == 1) {
            return true;
        }
        return $current ;
        //|| $this->checkPermission($user, $model, 'delete');
    }
}