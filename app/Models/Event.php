<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;
    use \Conner\Tagging\Taggable;
    protected $table = 'services';
    protected $fillable = [
        'user_id', 'short_description',
        'Descripition', 'status', 'charges',
    ];
    public function images()
    {
        return $this->hasMany(Serviceimage::class, 'service_id');
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_service', 'service_id', 'category_id');
    }
    public function likes()
    {
        return $this->hasMany(Like::class, 'service_id');
    }
    /**
     * Get the user that owns the Event
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}