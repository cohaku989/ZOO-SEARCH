<?php

namespace App\Models;

use App\Models\Zoo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal_order extends Model
{
    use HasFactory;
    
    public function zoos() {
        return $this->belongsToMany(Zoo::class);
    }
    
}
