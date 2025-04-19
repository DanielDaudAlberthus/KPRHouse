<?php

namespace App\Services;

use App\Models\Category;
use App\Models\City;
use App\Models\House;

class HouseService
{
    public function getCategoriesAndCities(){
        return [
            'categories' => Category::latest()->get(),
            'cities' => City::latest()->get(),
        ];
    }

    // public function searchHouses($filters){
    //     $query = House::query();

    //     if (!empty($filters['city'])){
    //         $query->where('city_id', $filters['city']);
    //     }

    //     if (!empty($filters['category'])){
    //         $query->where('category_id', $filters['category']);
    //     }

    //     $house = $query->get();

    //     $category = Category::findOrFail($filters['category'] ?? null);
    //     $city = City::findMany($filters['city'] ?? null);

    //     return compact('house', 'category', 'city');
    // }

    public function searchHouses($filters){
        $query = House::query();

        // Tambahkan pengecekan untuk city dan category
        $cityId = $filters['city'] ?? null;
        $categoryId = $filters['category'] ?? null;

        if ($cityId){
            $query->where('city_id', $cityId);
        }

        if ($categoryId){
            $query->where('category_id', $categoryId);
        }

        $houses = $query->get();

        // Gunakan null coalescing dan pengecekan yang aman
        $category = $categoryId ? Category::find($categoryId) : null;
        $city = $cityId ? City::find($cityId) : City::all();

        return compact('houses', 'category', 'city');
    }

    public function getHouseDetails($house){
        //eager loading laravel
        $house->load(['photos', 'facilities', 'facilities.facility']);
        return $house;
    }
}