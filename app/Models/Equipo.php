<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    public $timestamps = false;

	protected $fillable =[
        'slug',
        'title',
		'description',
		'nombre',
		'descripcion',
		'urlfoto', 
        'visitas',
		'votos',
		'pj',
		'pg',
		'pe',
		'pp',
		'gf',
		'gc',
		'pts',
		'gd',
		'grupos',
        'campeonato_id'
	];
   

    public function campeonatos(){
        return $this->belongsTo('App\Models\Campeonato');		
    }    

    public function jugadors(){
        return $this->hasMany('App\Models\Jugador');
    }
/*
    public function calendarios(){
        return $this->hasMany('App\Models\Calendario');
    }
    */
}
