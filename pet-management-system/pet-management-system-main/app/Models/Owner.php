<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $table = 'owners';
    protected $primaryKey = 'OID';
    public $timestamps = false;

    protected $fillable = [
        'LastName',
        'Street',
        'City',
        'ZipCode',
        'State',
        'Age',
        'AnnualIncome'
    ];
}
