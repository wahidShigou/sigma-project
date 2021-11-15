<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chapitre extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'contenu', 'formation_id'];

    protected $searchableFields = ['*'];

    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }
}
