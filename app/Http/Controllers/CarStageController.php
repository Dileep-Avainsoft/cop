<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarStage;

class CarStageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.car_stage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'car_stage_name'=>'required'

        ]);
        $carStage = new CarStage;
        if ($carStage) {
            $carStage->car_stage_name = $request->car_stage_name;
            $carStage->save();

            session()->flash('success', 'Car Stage added successfully.');
        } else {
            session()->flash('error', 'Something went wrong.');
        }
        return redirect()->route('car_stage.view');
    }

    /**
     * Display the specified resource.
     */
    public function view()
    {
        $car_stage_view = CarStage::get();
        return view('admin.car_stage.view',['car_stage_view'=> $car_stage_view]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $car_stage_edit = CarStage::where('car_stage_id',decrypt($id))->first();
        return view('admin.car_stage.edit',['car_stage_edit'=> $car_stage_edit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'car_stage_name'=>'required'

        ]);

        // dd($request->all());
        $car_stage_update = CarStage::where('car_stage_id', decrypt($id))->first();

        if ($car_stage_update) {
            $car_stage_update->car_stage_name = $request->car_stage_name;
            $car_stage_update->save();

            session()->flash('success', 'Car Stage updated successfully.');
        } else {
            session()->flash('error', 'Something went wrong.');
        }

        return redirect()->route('car_stage.view');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car_stage_destroy = CarStage::where('car_stage_id', decrypt($id))->first();
        if ($car_stage_destroy) {
            $car_stage_destroy->delete();
            session()->flash('success', 'Car Stage deleted successfully.');
        }
        else{
            session()->flash('error', 'Something went wrong.');

        }
        return redirect()->route('car_stage.view');
    }

}
