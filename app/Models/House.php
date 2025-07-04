<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class House extends Model
{
    use SoftDeletes;
    //mass assignment
    protected $fillable = [
        'name', 'slug', 'thumbnail', 'about', 'price', 'bedroom','bathroom', 'certificate', 'electric', 'land_area', 'building_area', 'category_id', 'city_id'
    ];

    //nayapati-2025 -> Nayapati 2025
    public function setNameAttribute($value){
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function photos(){
        return $this->hasMany(HousePhoto::class);
    }

    public function interest(){
        return $this->hasMany(Interest::class);
    }

    public function facilities(){
        return $this->hasMany(HouseFacility::class);
    }

    public function mortgageRequest(){
        return $this->hasMany(MortgageRequest::class);
    }
}