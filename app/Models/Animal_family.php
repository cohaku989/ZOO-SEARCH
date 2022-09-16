<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Zoo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal_family extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'animal_family',
    ];
    
    public function zoos() {
        return $this->belongsToMany(Zoo::class);
    }
    
    public function posts() {
        return $this->hasMany(Post::class);
    }
}
