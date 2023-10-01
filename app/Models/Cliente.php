<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'id_cli'; // Nombre de la clave primaria

    protected $fillable = [
        'cod_asociado',
        'id_users',
        'nombre',
        'apellido1',
        'apellido2',
        'dpi',
        'sexo',
        'direccion',
        'fecha_nac',
        'estado_civ',
    ];

    // Relación con el modelo User (si es necesario)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
}
