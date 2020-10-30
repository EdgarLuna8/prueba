<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;

class Prospecto extends Model
{
    Use Notifiable;

    protected $table = 'prospectos';

    protected $fillable = [
        'nombre',
        'telefono',
        'email',
        'asunto'
    ];
}
