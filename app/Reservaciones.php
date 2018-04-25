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
    protected $fillable = ['str_codigo','str_email','str_nombre','str_telefono','dbl_precio','dbl_total_pagar','int_ninos','int_adultos','int_dias','str_mensaje','lng_idpersona', 'lng_idtipohab', 'dmt_fecha_entrada', 'dmt_fecha_salida','created_at', 'updated_at', 'bol_eliminado','str_tipo_reserva','lng_idnumhab'];    

}
