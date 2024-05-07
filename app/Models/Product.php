<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'qty',
        'price',
        'category',
        'description',
        'image',
        'user_id',
    ];
    public function getImageURL(){
        if($this->image){
            return url('storage/'.$this->image);
        }
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
