<?php

namespace App\Policies;

use App\Models\Beers;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BeersPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Beers  $beers
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Beers $beers)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Beers  $beers
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Beers $beers)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Beers  $beers
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Beers $beers)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Beers  $beers
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Beers $beers)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Beers  $beers
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Beers $beers)
    {
        //
    }
}
