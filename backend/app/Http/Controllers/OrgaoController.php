<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orgao  $orgao
     * @return \Illuminate\Http\Response
     */
    public function show(Orgao $orgao)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orgao  $orgao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orgao $orgao)
    {
        //
    }
}
