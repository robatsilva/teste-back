<?php

use Illuminate\Database\Seeder;

class TiposCaminhoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tipos_caminhoes')->insert(array (
            0 =>
            array (
                'id' => 1,
                'tipo' => 'Caminhão 3/4',
            ),
            1 =>
            array (
                'id' => 2,
                'tipo' => 'Caminhão toco',
            ),
            2 =>
            array (
                'id' => 3,
                'tipo' => 'Caminhão truck',
            ),
            3 =>
            array (
                'id' => 4,
                'tipo' => 'Carreta simples',
            ),
            4 =>
            array (
                'id' => 5,
                'tipo' => 'Carreta eixo extendido',
            ),
        ));
    }
}
