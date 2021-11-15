<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'image',
        'prix',
        'duree',
        'user_id',
        'categorie_id',
        'type_formation_id',
    ];

    protected $searchableFields = ['*'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function typeFormation()
    {
        return $this->belongsTo(TypeFormation::class);
    }

    public function chapitres()
    {
        return $this->hasMany(Chapitre::class);
    }
}
