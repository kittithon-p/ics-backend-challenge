<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function genders()
    {
        return $this->hasOne(Gender::class,'id', 'gender_id');
    }
    public function sizes()
    {
        return $this->hasOne(Size::class,'id', 'size_id');
    }
    public function categorie()
    {
        return $this->hasOne(Category::class,'id', 'categorie_id');
    }
}
