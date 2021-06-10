<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    use HasFactory;
    public $timestamps 	= 	false;
	protected $fillable =[        
        'fecha',
        'mes',
        'dia',
        'hora',
        'urlfoto',
        'urlfoto2',
        'descripcion',
        'tipo',
        'visitas',
        'jugado',
        'marcador_1',
        'marcador_2',
        'equipo1_id',
        'equipo2_id',
        'campeonato_id'
    ];

    public function equipos1(){
        return $this->belongsTo(Equipo::class,'equipo1_id');
    } 

    public function equipos2(){
        return $this->belongsTo(Equipo::class,'equipo2_id');
    }   
    
    public function campeonatos(){
        return $this->belongsTo(Campeonato::class);
    }  

}
