<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{
    use HasFactory;
    public $timestamps 	= 	false;
    protected $fillable =[  
        'slug',
        'title',  
        'description',
        'nombre',    
        'descripcion',
        'urlfoto',
        'visitas'];
        public function equipos(){
            return $this->hasMany('App\Models\Equipo');
        }
        public function calendarios(){
            return $this->hasMany('App\Models\Calendario');
        }
}
