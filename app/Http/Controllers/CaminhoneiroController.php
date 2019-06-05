<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Caminhoneiros;
use Carbon\Carbon;

class CaminhoneiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Caminhoneiros::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $caminhoneiro = new Caminhoneiros();
        $caminhoneiro->nome = $request->input("nome");
        $caminhoneiro->idade = $request->input("idade");
        $caminhoneiro->sexo = $request->input("sexo");
        $caminhoneiro->tipo_cnh = $request->input("tipo_cnh"); 
        $caminhoneiro->veiculo_proprio = $request->input("veiculo_proprio"); 
        $caminhoneiro->tipo_caminhao_id = $request->input("tipo_caminhao_id");
        $caminhoneiro->carregado = $request->input("carregado");
        $caminhoneiro->origem_id = $request->input("origem_id");
        $caminhoneiro->origem_latitude = $request->input("origem_latitude");
        $caminhoneiro->origem_longitude = $request->input("origem_longitude");
        $caminhoneiro->destino_id = $request->input("destino_id");
        $caminhoneiro->destino_latitude = $request->input("destino_latitude");
        $caminhoneiro->destino_longitude = $request->input("destino_longitude");
        $caminhoneiro->save();

        return response()->json([
            'msg' => 'Registro incluido com sucesso',
            'caminhoneiro' => $caminhoneiro
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $caminhoneiro = Caminhoneiros::find($id);
        $caminhoneiro->nome = $request->input("nome") ? $request->input("nome") : $caminhoneiro->nome;
        $caminhoneiro->idade = $request->input("idade") ? $request->input("idade") : $caminhoneiro->idade;
        $caminhoneiro->sexo = $request->input("sexo") ? $request->input("sexo") : $caminhoneiro->sexo;
        $caminhoneiro->tipo_cnh = $request->input("tipo_cnh") ? $request->input("tipo_cnh") : $caminhoneiro->tipo_cnh;
        $caminhoneiro->veiculo_proprio = $request->input("veiculo_proprio") ? $request->input("veiculo_proprio") : $caminhoneiro->veiculo_proprio;
        $caminhoneiro->tipo_caminhao_id = $request->input("tipo_caminhao_id") ? $request->input("tipo_caminhao_id") : $caminhoneiro->tipo_caminhao_id;
        $caminhoneiro->carregado = $request->input("carregado") ? $request->input("carregado") : $caminhoneiro->carregado;
        $caminhoneiro->origem_id = $request->input("origem_id") ? $request->input("origem_id") : $caminhoneiro->origem_id;
        $caminhoneiro->origem_latitude = $request->input("origem_latitude") ? $request->input("origem_latitude") : $caminhoneiro->origem_latitude;
        $caminhoneiro->origem_longitude = $request->input("origem_longitude") ? $request->input("origem_longitude") : $caminhoneiro->origem_longitude;
        $caminhoneiro->destino_id = $request->input("destino_id") ? $request->input("destino_id") : $caminhoneiro->destino_id;
        $caminhoneiro->destino_latitude = $request->input("destino_latitude") ? $request->input("destino_latitude") : $caminhoneiro->destino_latitude;
        $caminhoneiro->destino_longitude = $request->input("destino_longitude") ? $request->input("destino_longitude") : $caminhoneiro->destino_longitude;
        $caminhoneiro->save();
        return response()->json([
            'msg' => 'Registro atualizado com sucesso',
            'caminhoneiro' => $caminhoneiro
        ]);
    }


    public function getVazios() {
        return Caminhoneiros::where('carregado', false)->get();
    }

    public function getCarregadosDia() {
        return Caminhoneiros::where('carregado', true)
            ->whereDate('created_at', '=', Carbon::today()->toDateString())
            ->get();
    }
    public function getCarregadosSemana() {
        return Caminhoneiros::where('carregado', true)
            ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            ->get();
    }
    public function getCarregadosMes() {
        return Caminhoneiros::where('carregado', true)
            ->whereMonth(
                'created_at', '=', Carbon::now()->subMonth()->month
            )
            ->get();
    }
    public function getVeiculosProprios() {
        return Caminhoneiros::where('veiculo_proprio', true)
            ->get();
    }

    public function getOrigemDestino() {
        return Caminhoneiros::select('tipo_caminhao_id', 'origem_id', 'destino_id')
            ->groupBy('tipo_caminhao_id', 'origem_id', 'destino_id')
            ->get();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
