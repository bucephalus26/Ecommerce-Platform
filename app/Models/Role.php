<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // many to many
    public function users()
    {
        // same role with multiple users
        return $this->belongsToMany(User::class, 'role_users');
    }


}
