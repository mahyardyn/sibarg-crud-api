<?php

namespace App\Http\Controllers;

use App\Models\Tip;
use Illuminate\Http\Request;
use App\Http\Resources\TipsResource;

class TipsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TipsResource::collection(Tip::all());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tip =Tip::create([
            'title' => $request->input('title'),
            'description'=> $request->input('description'),
        ]);

        return new TipsResource($tip);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tip =Tip::findOrFail($id);
        return new TipsResource($tip);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tip =Tip::findOrFail($id);
        $tip->update([
            'title' => $request->input('title'),
            'description'=> $request->input('description'),
        ]);

        return new TipsResource($tip);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tip::findOrFail($id)->delete();
        return response(null,204);
    }
}
