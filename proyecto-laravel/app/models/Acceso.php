<?php

/**
 * Description of Acceso
 *
 * @author Sebastián Salazar Molina <sebasalazar@gmail.com>
 */
class Acceso extends \Eloquent {

    protected $table = "accesos";
    protected $guarded = array('fecha');
    public $primaryKey = 'pk';
    public $timestamps = false;

    public function usuario() {
        return $this->hasOne('Usuario', 'usuario_fk');
    }

}

?>
