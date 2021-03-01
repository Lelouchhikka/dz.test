<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }
    public function view(User $user, Product $product)
    {
        //
    }


    public function create (User $user) {
        return true;
    }
    public function edit (User $user, Post $post) {
        return $user->id == $post->user_id;
    }
    public function update (User $user, Post $post) {
        return $user->id == $post->user_id;
    }
    public function delete (User $user, Post $post) {
        return $user->id == $post->user_id;
    }
}
