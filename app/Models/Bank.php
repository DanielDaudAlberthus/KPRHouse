<?php

namespace App\Models;

use App\Models\Interest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'photo'
    ];

    public function intereset(){
        return $this->hasMany(Interest::class);
    }
}