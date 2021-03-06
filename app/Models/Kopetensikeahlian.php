<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kopetensikeahlian extends Model
{
    use HasFactory;

    protected $guarded =[
        "id"
    ];

    public function kompeten(){
        return $this->belongsTo(Kompeten::class);
    }
}
