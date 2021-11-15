<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeFormation extends Model
{
    use HasFactory;

    protected $fillable = ['libelle'];

    protected $searchableFields = ['*'];

    protected $table = 'type_formations';

    public function formations()
    {
        return $this->hasMany(Formation::class);
    }
}
