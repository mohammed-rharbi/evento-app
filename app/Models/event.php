<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;


    public function organizer(){

        return $this->belongsTo(User::class , 'organizer_id');
    }

    public function category(){

        return $this->belongsTo(category::class);
    }
}
