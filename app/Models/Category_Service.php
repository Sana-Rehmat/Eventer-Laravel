<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_service extends Model
{
    use HasFactory;

    protected $table = 'category_service';
    protected $fillable = [
        'service_id', 'category_id',
    ];
    public function setCatAttribute($value)
    {
        $this->attributes['category_id'] = json_encode($value);
    }

    /**
     * Get the categories
     *
     */
    public function getCatAttribute($value)
    {
        return $this->attributes['category_id'] = json_decode($value);
    }
}
