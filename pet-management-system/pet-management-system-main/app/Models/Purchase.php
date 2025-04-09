<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $table = 'purchases';
    protected $primaryKey = ['OID', 'FoodID', 'PetID', 'Month', 'Year'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'OID',
        'FoodID',
        'PetID',
        'Month',
        'Year',
        'Quantity'
    ];
}
