<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentario';
    protected $fillable = ['comentario', 'relevancia'];

    public function Incidente()
    {
        return $this->belongsTo('App\Incidente');
    }

    public function Usuario()
    {
        return $this->belongsTo('App\User');
    }
}
