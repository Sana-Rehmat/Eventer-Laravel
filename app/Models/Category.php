<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $searchableColumns = ['name'];
    protected $table = 'categories';
    protected $fillable = [
        'name',
    ];

    public function posts()
    {
        return $this->belongsToMany(Event::class, 'category_service', 'Category_id', 'service_id');
    }

}
