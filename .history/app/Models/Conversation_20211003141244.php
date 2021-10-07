<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;
    public function getRouteKeyName()
    {

    }
    public function Users()
    {
        return $this->belongsToMany(User::class);
    }
}
