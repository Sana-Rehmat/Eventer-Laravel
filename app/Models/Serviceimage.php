<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serviceimage extends Model
{
    use HasFactory;
    protected $table='service_images';
    protected $fillable = [
        'service_id','serviceimages',
    ];
    public function product()
    {
        return $this->belongsTo(Event::class, 'service_id');

    //   return $this->belongsTo('App\Event', 'service_id');
    }
    public function setFilenamesAttribute($value)
    {
        $this->attributes['filenames'] = json_encode($value);
    }
}
