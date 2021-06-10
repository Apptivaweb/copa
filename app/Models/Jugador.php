<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    public $timestamps = false;
   
	protected $fillable =[
		'slug',
        'title',
		'description',
		'nombre',
		'nombrecompleto',
		'equipo',
		'fechanacimiento',
		'edad',
		'pais',
		'altura',
		'peso',
		'partidos',
		'debut',
        'posicion',
        'nombreposicion',
		'descripcion',
		'urlfoto', 		
        'visitas',
		'votos',
		'estrellas',
		'equipo_id',
		'estado'
    ];
    public function equipos(){
		return $this->belongsTo('App\Models\Equipo');		
    }
}
