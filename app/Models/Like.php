<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $table = 'socials';
    protected $fillable = [
        'user_id', 'service_id', 'status',
    ];
    public function post()
    {
        return $this->belongsTo(Event::class, 'service_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
