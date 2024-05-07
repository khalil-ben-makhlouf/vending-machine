<?php

// app/Models/Revenue.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    protected $table = 'revenues';
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
