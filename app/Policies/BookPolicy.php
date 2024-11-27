<?php
 
namespace App\Policies;
 
use App\Models\Book;
use App\Models\User;
 
class BookPolicy
{
    /**
     * Determine if the given post can be updated by the user.
     */
    public function update(?User $user): bool
    {
        return !is_null($user);
    }
    public function create(?User $user): bool
    {
        return !is_null($user);
    }
    public function delete(?User $user): bool
    {
        return !is_null($user);
    }

}