<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $table = 'experiences';
    protected $fillable = [
        'user_id', 'designation',
        'organization', 'start_year', 'end_year',
    ];
}