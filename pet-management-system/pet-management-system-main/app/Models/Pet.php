<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pets';
    protected $primaryKey = 'PetID';
    public $timestamps = false;

    protected $fillable = [
        'Name',
        'Age',
        'Street',
        'City',
        'ZipCode',
        'State',
        'TypeofPet'
    ];
}
