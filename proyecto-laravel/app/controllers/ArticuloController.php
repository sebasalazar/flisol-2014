<?php

class ArticuloController extends \BaseController {

    public function mostrar() {
        return View::make('articulo');
    }

    public function crear() {
        $userdata = array(
            'autor' => Input::get('autor'),
            'titulo' => Input::get('titulo'),
            'articulo' => Input::get('articulo')
        );

        $rules = array(
            'autor' => 'Required',
            'titulo' => 'Required',
            'articulo' => 'Required'
        );

        $validator = Validator::make($userdata, $rules);

        if ($validator->passes()) {
            // Enviar Correo Electrónico
            $articulo = new Articulo();
            $articulo->autor = $userdata['autor'];
            $articulo->titulo = $userdata['titulo'];
            $articulo->articulo = $userdata['articulo'];
            $articulo->save();

            return Redirect::to('crearArticulo')->with('exito', true);
        }

        // Something went wrong.
        return Redirect::to('crearArticulo')->withErrors($validator)->withInput();
    }

}
