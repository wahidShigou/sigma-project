<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
        'email_contact',
        'tel',
        'photo',
        'status',
        'profil_id',
    ];

    protected $searchableFields = ['*'];

    protected $hidden = ['password'];

    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }

    public function formations()
    {
        return $this->hasMany(Formation::class);
    }

    public function profil()
    {
        return $this->belongsTo(Profil::class);
    }
}
