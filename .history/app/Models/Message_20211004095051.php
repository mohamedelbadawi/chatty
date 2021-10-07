<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = ['body'];

    public function Conversation()
    {
        return $this->belongsTo(Conversation::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function isOwn()
    {
        return auth()->id() === $this->user_id;
    }
}
