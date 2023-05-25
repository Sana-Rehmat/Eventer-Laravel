<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profile_settings';
protected $fillable = [
'user_id','country',
'state','postal_code','city','DOB','Phone_no','bio',
'address'

];}
