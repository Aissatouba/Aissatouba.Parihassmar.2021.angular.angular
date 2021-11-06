<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'villeDepart',
        'villeArrivee',
        'heuredepart',
        'date',
    ];

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
