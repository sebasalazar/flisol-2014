<?php

/**
 * Description of UserTableSeeder
 *
 * @author Sebastián Salazar Molina <sebasalazar@gmail.com>
 */
class UserTableSeeder extends Seeder {

    public function run() {
        // DB::table('usuarios')->truncate();

        $uno = array(
            'email' => 'sebasalazar@gmail.com',
            'password' => Hash::make('flisol'),
        );
        
        $dos = array(
            'email' => 'prueba@mail.cl',
            'password' => Hash::make('flisol'),
        );

        DB::table('usuarios')->insert($uno);
        DB::table('usuarios')->insert($dos);
    }

}
