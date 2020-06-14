<?php

namespace App\Http\Controllers;

use App\Models\Banca;
use \Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class BancaController extends Controller
{
    private $service;

    public function __construct(\App\Http\Service\Banca $banca)
    {
        $this->service = $banca;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return $this->service->listarBancas();
        } catch (\Exception $exception) {
            throw $exception;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        throw new \HttpException('Método não implementado', Response::HTTP_METHOD_NOT_ALLOWED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banca  $banca
     * @return \Illuminate\Http\Response
     */
    public function show(Banca $banca)
    {
        throw new \HttpException('Método não implementado', Response::HTTP_METHOD_NOT_ALLOWED);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banca  $banca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banca $banca)
    {
        throw new \HttpException('Método não implementado', Response::HTTP_METHOD_NOT_ALLOWED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banca  $banca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banca $banca)
    {
        throw new \HttpException('Método não implementado', Response::HTTP_METHOD_NOT_ALLOWED);
    }
}
