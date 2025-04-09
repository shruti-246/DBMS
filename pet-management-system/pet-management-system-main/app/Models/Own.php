<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Own extends Model
{
    use HasFactory;

    protected $table = 'owns';
    protected $primaryKey = null;
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'PetID',
        'Year',
        'OID',
        'PetAgeatOwnership',
        'PricePaid'
    ];
}
