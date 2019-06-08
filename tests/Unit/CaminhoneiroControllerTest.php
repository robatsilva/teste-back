<?php

namespace Tests\Unit;

use App\Caminhoneiros;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CaminhoneiroControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function test_can_create_caminhoneiro() {
        $data = [
            "nome" => "Teste unit",
            "idade" => 20,
            "sexo" => "m",
            "veiculo_proprio" => true,
            "tipo_cnh" => "d",
            "tipo_caminhao_id" => 1,
            "carregado" => false,
            "origem_id" => 1,
            "destino_id" => 2,
            "destino_latitude" => 11.11111111,
            "origem_latitude" => 11.11111111,
            "destino_longitude" => 11.11111111,
            "origem_longitude" => 11.11111111
        ];
        $response = $this->json('POST', route('caminhoneiros.store'), $data);
            
        $response
            ->assertStatus(200);
    }
    
    public function test_can_update_caminhoneiro() {
        $data = [
            "nome" => "Teste update",
        ];
        $response = $this->json('PUT', route('caminhoneiros.update', '1'), $data);
            
        $response
            ->assertStatus(200);
    }

    public function test_can_get() {
        $response = $this->json('GET', route('caminhoneiros'));
            
        $response
            ->assertStatus(200);
    }
    public function test_can_get_vazios() {
        $response = $this->json('GET', route('caminhoneiros.vazios'));
            
        $response
            ->assertStatus(200);
    }
    public function test_carregados_dia() {
        $response = $this->json('GET', route('caminhoneiros.carregados_dia'));
            
        $response
            ->assertStatus(200);
    }
    public function test_carregados_semana() {
        $response = $this->json('GET', route('caminhoneiros.carregados_semana'));
            
        $response
            ->assertStatus(200);
    }
    public function test_carregados_mes() {
        $response = $this->json('GET', route('caminhoneiros.carregados_mes'));
            
        $response
            ->assertStatus(200);
    }
    public function test_veiculos_proprios() {
        $response = $this->json('GET', route('caminhoneiros.veiculos_proprios'));
            
        $response
            ->assertStatus(200);
    }
    public function test_origem_destino() {
        $response = $this->json('GET', route('caminhoneiros.origem_destino'));
            
        $response
            ->assertStatus(200);
    }
}
