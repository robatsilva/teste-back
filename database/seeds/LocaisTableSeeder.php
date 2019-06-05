<?php

use Illuminate\Database\Seeder;

class LocaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('locais')->insert(array (
            0 =>
            array (
                'id' => '1',
                'nome' => 'Acre',
                'uf' => 'AC',
                'iso' => '12',
                'slug' => 'acre',
                'population' => '816687',
            ),
            1 =>
            array (
                'id' => '2',
                'nome' => 'Alagoas',
                'uf' => 'AL',
                'iso' => '27',
                'slug' => 'alagoas',
                'population' => '3358963',
            ),
            2 =>
            array (
                'id' => '3',
                'nome' => 'Amazonas',
                'uf' => 'AM',
                'iso' => '13',
                'slug' => 'amazonas',
                'population' => '4001667',
            ),
            3 =>
            array (
                'id' => '4',
                'nome' => 'Amapá',
                'uf' => 'AP',
                'iso' => '16',
                'slug' => 'amapa',
                'population' => '782295',
            ),
            4 =>
            array (
                'id' => '5',
                'nome' => 'Bahia',
                'uf' => 'BA',
                'iso' => '29',
                'slug' => 'bahia',
                'population' => '15276566',
            ),
            5 =>
            array (
                'id' => '6',
                'nome' => 'Ceará',
                'uf' => 'CE',
                'iso' => '23',
                'slug' => 'ceara',
                'population' => '8963663',
            ),
            6 =>
            array (
                'id' => '7',
                'nome' => 'Distrito Federal',
                'uf' => 'DF',
                'iso' => '53',
                'slug' => 'distrito-federal',
                'population' => '2977216',
            ),
            7 =>
            array (
                'id' => '8',
                'nome' => 'Espírito Santo',
                'uf' => 'ES',
                'iso' => '32',
                'slug' => 'espirito-santo',
                'population' => '3973697',
            ),
            8 =>
            array (
                'id' => '9',
                'nome' => 'Goiás',
                'uf' => 'GO',
                'iso' => '52',
                'slug' => 'goias',
                'population' => '6695855',
            ),
            9 =>
            array (
                'id' => '10',
                'nome' => 'Maranhão',
                'uf' => 'MA',
                'iso' => '21',
                'slug' => 'maranhao',
                'population' => '6954036',
            ),
            10 =>
            array (
                'id' => '11',
                'nome' => 'Minas Gerais',
                'uf' => 'MG',
                'iso' => '31',
                'slug' => 'minas-gerais',
                'population' => '20997560',
            ),
            11 =>
            array (
                'id' => '12',
                'nome' => 'Mato Grosso do Sul',
                'uf' => 'MS',
                'iso' => '50',
                'slug' => 'mato-grosso-do-sul',
                'population' => '2682386',
            ),
            12 =>
            array (
                'id' => '13',
                'nome' => 'Mato Grosso',
                'uf' => 'MT',
                'iso' => '51',
                'slug' => 'mato-grosso',
                'population' => '3305531',
            ),
            13 =>
            array (
                'id' => '14',
                'nome' => 'Pará',
                'uf' => 'PA',
                'iso' => '15',
                'slug' => 'para',
                'population' => '8272724',
            ),
            14 =>
            array (
                'id' => '15',
                'nome' => 'Paraiba',
                'uf' => 'PB',
                'iso' => '25',
                'slug' => 'paraiba',
                'population' => '3999415',
            ),
            15 =>
            array (
                'id' => '16',
                'nome' => 'Pernambuco',
                'uf' => 'PE',
                'iso' => '26',
                'slug' => 'pernambuco',
                'population' => '9410336',
            ),
            16 =>
            array (
                'id' => '17',
                'nome' => 'Piauí',
                'uf' => 'PI',
                'iso' => '22',
                'slug' => 'piaui',
                'population' => '3212180',
            ),
            17 =>
            array (
                'id' => '18',
                'nome' => 'Paraná',
                'uf' => 'PR',
                'iso' => '41',
                'slug' => 'parana',
                'population' => '11242720',
            ),
            18 =>
            array (
                'id' => '19',
                'nome' => 'Rio de Janeiro',
                'uf' => 'RJ',
                'iso' => '33',
                'slug' => 'rio-de-janeiro',
                'population' => '16635996',
            ),
            19 =>
            array (
                'id' => '20',
                'nome' => 'Rio Grande do Norte',
                'uf' => 'RN',
                'iso' => '24',
                'slug' => 'rio-grande-do-norte',
                'population' => '3474998',
            ),
            20 =>
            array (
                'id' => '21',
                'nome' => 'Rondônia',
                'uf' => 'RO',
                'iso' => '11',
                'slug' => 'rondonia',
                'population' => '1787279',
            ),
            21 =>
            array (
                'id' => '22',
                'nome' => 'Roraima',
                'uf' => 'RR',
                'iso' => '14',
                'slug' => 'roraima',
                'population' => '514229',
            ),
            22 =>
            array (
                'id' => '23',
                'nome' => 'Rio Grande do Sul',
                'uf' => 'RS',
                'iso' => '43',
                'slug' => 'rio-grande-do-sul',
                'population' => '11286500',
            ),
            23 =>
            array (
                'id' => '24',
                'nome' => 'Santa Catarina',
                'uf' => 'SC',
                'iso' => '42',
                'slug' => 'santa-catarina',
                'population' => '6910553',
            ),
            24 =>
            array (
                'id' => '25',
                'nome' => 'Sergipe',
                'uf' => 'SE',
                'iso' => '28',
                'slug' => 'sergipe',
                'population' => '2265779',
            ),
            25 =>
            array (
                'id' => '26',
                'nome' => 'São Paulo',
                'uf' => 'SP',
                'iso' => '35',
                'slug' => 'sao-paulo',
                'population' => '44749699',
            ),
            26 =>
            array (
                'id' => '27',
                'nome' => 'Tocantins',
                'uf' => 'TO',
                'iso' => '17',
                'slug' => 'tocantins',
                'population' => '1532902',
            ),
        ));
    }
}
