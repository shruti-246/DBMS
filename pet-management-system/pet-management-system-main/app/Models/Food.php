<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';
    protected $primaryKey = 'FoodID';
    public $timestamps = false;

    protected $fillable = [
        'Name',
        'Brand',
        'TypeofFood',
        'Price',
        'ItemWeight',
        'ClassofFood'
    ];
}
