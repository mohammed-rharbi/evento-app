<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;

    protected $guarded = null ;

    protected $fillable = [
        'title',
        'description',
        'start_time',
        'end_time',
        'location',
        'categories_id',
        'numberOfPlacesAvailable',
        'validated',
    ];
    


    public function organizer(){

        return $this->belongsTo(User::class , 'organizer_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }

    public function reservations()
    {
        return $this->hasMany(EventReservation::class);
    }
}
