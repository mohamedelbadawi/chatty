<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;
    public function getRouteKeyName()
    {
        return 'uuid';
    }
    public function Users()
    {
        return $this->belongsToMany(User::class);
    }
    public function Messages()
    {
        return $this->hasMany(Message::class)->oldest();
    }

    public function getConversationOthers()
    {
        return $this->Users()->where('user_id', '!=', auth()->id());
    }
}
