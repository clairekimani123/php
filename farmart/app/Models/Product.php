<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    //model for the products
    use HasFactory;
    protected $fillable = ['name', 'description', 'price',  'stock'];


}
