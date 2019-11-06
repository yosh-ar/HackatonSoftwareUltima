<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{
    protected $table = 'incidente';
    protected $fillable = ['nombre', 'latitud', 'longitud', 'imagen', 'relevancia'];

    public function Usuario()
    {
        return $this->belongsTo('App/User');
    }

    public function Comentario()
    {
        return $this->hasMany('App/Comentario');
    }

    public function Categoria()
    {
        return $this->belongsTo('App/Categoria');
    }
}
