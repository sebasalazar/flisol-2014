<?php

/**
 * Description of Acceso
 *
 * @author Sebastián Salazar Molina <sebasalazar@gmail.com>
 */
class Articulo extends \Eloquent {

    protected $table = "articulos";
    protected $guarded = array('fecha');
    public $primaryKey = 'pk';
    public $timestamps = false;

}

?>
