<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matieres;

class Publication extends Model
{
    use HasFactory;
    protected $table = 'publicationn';

    public static function metiere()
    {
        return $this->belongsTo(Matieres::class);
    }
}