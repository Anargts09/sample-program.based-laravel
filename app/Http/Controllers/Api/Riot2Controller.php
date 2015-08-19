<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Riot2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $response = [
            'users' => [
                [
                    'name' => 'alegriaghost',
                    'age'  => 30,
                ],
                [
                    'name' => 'tsk',
                    'age'  => 25,
                ],
                [
                    'name' => 'fts',
                    'age'  => 29,
                ],
            ],
            'tmp' => 'riot2-' . __METHOD__,
        ];

        \Closure::class;

        return \Response::json($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        echo 'riot2-' . __METHOD__;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $response = [
            'users' => [
                [
                    'name' => 'alegriaghost',
                    'age'  => 30,
                ],
                [
                    'name' => 'tsk',
                    'age'  => 25,
                ],
                [
                    'name' => 'fts',
                    'age'  => 29,
                ],
            ],
            'tmp' => 'riot2-' . __METHOD__,
        ];

        return \Response::json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        echo 'riot2-' . __METHOD__;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        echo 'riot2-' . __METHOD__;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
        echo 'riot2-' . __METHOD__;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        echo 'riot2-' . __METHOD__;
    }
}
