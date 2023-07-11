<?php

namespace App\Http\Controllers;

use App\Models\Generateqr;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class GenerateqrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    public function generarCodigosQr()
    {
        // Obtén los datos de la base de datos (ejemplo)
        $datos = DB::table('assistents')->get();

        // Genera los códigos QR y almacénalos en un array
        $codigosQr = [];
        foreach ($datos as $dato) {
            $contenido = $dato->campo_a_codificar;
            $codigoQr = QrCode::generate($contenido);
            $codigosQr[] = $codigoQr;
        }

        // Renderiza la vista y pasa los códigos QR a la misma
        return view('ruta_de_la_vista', compact('codigosQr'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Generateqr  $generateqr
     * @return \Illuminate\Http\Response
     */
    public function show(Generateqr $generateqr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Generateqr  $generateqr
     * @return \Illuminate\Http\Response
     */
    public function edit(Generateqr $generateqr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Generateqr  $generateqr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generateqr $generateqr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Generateqr  $generateqr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Generateqr $generateqr)
    {
        //
    }
}
