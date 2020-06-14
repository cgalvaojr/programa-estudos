<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OrgaoController extends Controller
{
    private $service;

    public function __construct(\App\Http\Service\Orgao $orgao)
    {
        $this->service = $orgao;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return $this->service->listarOrgaos();
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
     * @param  \App\Orgao  $orgao
     * @return \Illuminate\Http\Response
     */
    public function show(Orgao $orgao)
    {
        throw new \HttpException('Método não implementado', Response::HTTP_METHOD_NOT_ALLOWED);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orgao  $orgao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orgao $orgao)
    {
        throw new \HttpException('Método não implementado', Response::HTTP_METHOD_NOT_ALLOWED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orgao  $orgao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orgao $orgao)
    {
        throw new \HttpException('Método não implementado', Response::HTTP_METHOD_NOT_ALLOWED);
    }
}
