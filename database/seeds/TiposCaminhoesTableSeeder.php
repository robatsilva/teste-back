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
                'tipo' => 'Tipo 1',
            ),
            1 =>
            array (
                'id' => 2,
                'tipo' => 'Tipo 2',
            ),
            2 =>
            array (
                'id' => 3,
                'tipo' => 'Tipo 3',
            ),
            3 =>
            array (
                'id' => 4,
                'tipo' => 'Tipo 4',
            ),
            4 =>
            array (
                'id' => 5,
                'tipo' => 'Tipo 5',
            ),
        ));
    }
}
