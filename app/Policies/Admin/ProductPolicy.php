<?php

namespace App\Policies\Admin;

use App\Product;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    // filter for super admins
    public function before($user, $ability)
    {
        if ($user->hasRole('admin')) {
            return true;
        }
    }

    public function browse(User $user)
    {
        return $user->hasRole('seller');
    }

    /**
     * Determine whether the user can view any Products.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function read(User $user, Product $product)
    {
        if(empty($product->shop)) {
            return false;
        }
        return $user->id == $product->shop->user_id;
    }

    /**
     * Determine whether the user can update the Product.
     *
     * @param  \App\User  $user
     * @param  \App\Product  $product
     * @return mixed
     */
    public function edit(User $user, Product $product)
    {
        if(empty($product->shop)) {
            return false;
        }
        return $user->id == $product->shop->user_id;
    }

    public function add(User $user)
    {
        return $user->hasRole('seller');
    }

    /**
     * Determine whether the user can delete the Product.
     *
     * @param  \App\User  $user
     * @param  \App\Product  $product
     * @return mixed
     */
    public function delete(User $user, Product $product)
    {
        if(empty($product->shop)) {
            return false;
        }
        return $user->id == $product->shop->user_id;
    }
}
