<?php

namespace App\Http\Controllers;

use App\Http\Resources\Assunto;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AssuntoController extends Controller
{
    private $service;

    public function __construct(\App\Http\Service\Assunto $assunto)
    {
        $this->service = $assunto;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            return Assunto::collection($this->service->listarAssuntos());
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
     * @param  \App\Assunto  $assunto
     * @return \Illuminate\Http\Response
     */
    public function show(Assunto $assunto)
    {
        throw new \HttpException('Método não implementado', Response::HTTP_METHOD_NOT_ALLOWED);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assunto  $assunto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assunto $assunto)
    {
        throw new \HttpException('Método não implementado', Response::HTTP_METHOD_NOT_ALLOWED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assunto  $assunto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assunto $assunto)
    {
        throw new \HttpException('Método não implementado', Response::HTTP_METHOD_NOT_ALLOWED);
    }
}
