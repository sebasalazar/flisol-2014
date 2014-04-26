<?php

/**
 * Description of ContactoController
 *
 * @author Sebastián Salazar Molina <ssalazar@orangepeople.cl>
 */
class ContactoController extends BaseController {

    public function mostrar() {
        return View::make('contacto');
    }

    public function enviar() {
        $userdata = array(
            'nombre' => Input::get('nombre'),
            'email' => Input::get('email'),
            'asunto' => Input::get('asunto'),
            'mensaje' => Input::get('mensaje')
        );

        $data = array(
            'nombre' => Input::get('nombre'),
            'email' => Input::get('email'),
            'asunto' => Input::get('asunto'),
            'mensaje' => Input::get('mensaje')
        );

        $rules = array(
            'nombre' => 'Required',
            'email' => 'Required',
            'email' => 'email',
            'asunto' => 'Required',
            'mensaje' => 'Required'
        );

        $validator = Validator::make($userdata, $rules);

        if ($validator->passes()) {
            // Enviar Correo Electrónico
            /*
            Mail::send('emails.contacto', $data, function($message) {
                $message->to('soporte@mail.cl');
            });
            */

            unset($userdata['nombre']);
            unset($userdata['email']);
            unset($userdata['asunto']);
            unset($userdata['mensaje']);

            return Redirect::to('contacto')->with('exito', true);
        }

        // Something went wrong.
        return Redirect::to('contacto')->withErrors($validator)->withInput();
    }

}

?>
