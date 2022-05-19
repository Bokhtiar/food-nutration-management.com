<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BMI;
use Illuminate\Http\Request;

class CheckFitnessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.checkFitness.form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function calculate(Request $request)
    {
        $height = $request->height;
        $inc = $height*12;
        $mitter = $inc * 0.0254;
        $bmi = $request->weight / ($mitter*$mitter);
        // dd($bmi);
        $bmiDB = BMI::all();
        foreach ($bmiDB as $item) {
            if($item->start <= $bmi && $item->end >= $bmi){
                $show  = BMI::find($item->id);
                return view('user.checkFitness.report', compact('show'));
            }
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
        //
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
