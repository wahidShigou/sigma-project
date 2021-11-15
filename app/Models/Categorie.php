<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = ['libelle'];

    protected $searchableFields = ['*'];

    public function formations()
    {
        return $this->hasMany(Formation::class);
    }
}
