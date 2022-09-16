<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Animal_family;
use App\Models\Animal_order;
use App\Models\Prefecture;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Zoo extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public $timestamps = false;
    
        protected $fillable = [
        'zoo_name',
        'caption',
        'adress',
        'hp_url',
        'prefecture_id',
        'adults_price',
        'middle_price',
        'children_price',
    ];
    
    public function animal_families() {
        return $this->belongsToMany(Animal_family::class);
    }
    
    public function animal_orders() {
        return $this->hasMany(Animal_order::class);
    }
    
    public function prefecture() {
        return $this->belongsTo(Prefecture::class);
    }
    
    protected static function boot()
    {
        parent::boot();
     
        // 保存時user_idをログインユーザーに設定
        self::saving(function($zoo) {
            $zoo->admin_id = \Admin::id();
        });
    }
    

}
