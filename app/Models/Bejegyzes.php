<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bejegyzes extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'tevekenyseg_id',
        'osztaly_id',
        'allapot',
    ];
}
