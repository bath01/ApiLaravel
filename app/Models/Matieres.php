<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Publication;

class Matieres extends Model
{
    use HasFactory;

    protected $table = 'matieres';

    public static function publications()
    {
        return $this->hasMany(Publication::class, 'matierePub');
    }
}