<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservaciones extends Model
{
    
/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_reservaciones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['lng_idpersona', 'lng_idtipohab', 'dmt_fecha_entrada', 'dmt_fecha_salida','created_at', 'updated_at', 'bol_eliminado'];    

}
