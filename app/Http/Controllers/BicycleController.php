<?php

namespace App\Http\Controllers;

use App\Bicycle;
use Illuminate\Http\Request;
use  App\User;

class BicycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index()
        {

            try {
                return response()->json(Bicycle::all(), 200);
            } catch (Exception $exception) {
                return response()->json(['error' => $exception], 500);
            }
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
        $bicycle = Bicycle::create($request->all());
        return response()->json($bicycle, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bicycle  $bicycle
     * @return \Illuminate\Http\Response
     */
    public function show(Bicycle $bicycle)
    {
        try {

            $bicycleWithRelations = $bicycle->load('user');

            return response()->json($bicycleWithRelations, 200);
        } catch (Exception $exception) {
            return response()->json(['error' => $exception], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bicycle  $bicycle
     * @return \Illuminate\Http\Response
     */
    public function edit(Bicycle $bicycle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bicycle  $bicycle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bicycle $bicycle)
    {
        try {
            $bicycle->update($request->all());
            return response()->json($bicycle, 200);
        } catch (Exception $exception) {
            return response()->json(['error' => $exception], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bicycle  $bicycle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bicycle $bicycle)
    {
        try {


            $bicycle->delete();
            return response()->json(['message' => 'Deleted'], 205);
        } catch (Exception $exception) {
            return response()->json(['error' => $exception], 500);
        }
    }
}
