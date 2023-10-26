<?php

namespace App\Http\Controllers;

use App\Models\CarType;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CarTypeController extends Controller
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
        return view('admin.car_type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'car_type_name' => 'required|regex:/^[A-Za-z0-9\s]+$/|min:5|max:20|unique:car_types',
            'car_type_image' => 'required|image|mimes:png,jpg,jpeg,svg,webp|max:2048|unique:car_type_image',
        ]);


        $car_type_store = new CarType;
        $car_type_store->car_type_name = $request->car_type_name;
        $car_type_store->status = $request->has('status') ? 1 : 0;
        $car_type_store->save();


        $car_type_update = CarType::where('car_type_id', $car_type_store->car_type_id)->first();
        if ($car_type_update) {
            $car_type_id = $car_type_update->car_type_id;
            $uploadedImage = $request->file('car_type_image');
            $imageName = $car_type_id . '.' . $uploadedImage->getClientOriginalExtension();
            $webpImageName = $car_type_id . '.webp';
            $imagePath = public_path('CarType') . '/' . $car_type_id . '/' . $imageName;


            $uploadedImage->move(public_path('CarType') . '/' . $car_type_id, $webpImageName);

            // Run the cwebp command to convert the image to WebP
            $cwebpCommand = "cwebp $imagePath -o  80"; // Set quality (adjust as needed)
            exec($cwebpCommand);

            // Update the brand_logo in the Brand record
            $car_type_update->car_type_image = $webpImageName;
            $car_type_update->update();


            session()->flash('success', 'Car Type Create successfully.');
        } else {
            session()->flash('error', 'something went wrong!');
        }

        return redirect()->route('car_type.view');
    }

    /**
     * Display the specified resource.
     */
    public function view()
    {
        $car_type_show = CarType::get();
        return view('admin.car_type.view', ['car_type_show' => $car_type_show]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car_type_edit = CarType::where('car_type_id', decrypt($id))->first();
        return view('admin.car_type.edit', ['car_type_edit' => $car_type_edit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'car_type_name' => 'required',
            'car_type_image' => 'nullable|image|mimes:png,jpg,jpeg,gif,svg,webp|max:2048',
        ]);

        $car_type_update = CarType::where('car_type_id', decrypt($id))->first();

        $imagePath = 'CarType/' . $car_type_update->car_type_id . '/' . $car_type_update->car_type_id;

        if ($car_type_update) {
            if (isset($request->car_type_image)) {
                File::deleteDirectory($imagePath);
                // $fileExtension = $request->car_type_image->extension();
                // $imageName = $car_type_update->car_type_id . '.' . $fileExtension;
                // $request->car_type_image->move(public_path('CarType') . '/' . $car_type_update->car_type_id, $imageName);
                // $car_type_update->car_type_image = $imageName;
                $car_type_id = $car_type_update->car_type_id;
            $uploadedImage = $request->file('car_type_image');
            $imageName = $car_type_id . '.' . $uploadedImage->getClientOriginalExtension();
            $webpImageName = $car_type_id . '.webp';
            $imagePath = public_path('CarType') . '/' . $car_type_id . '/' . $imageName;


            $uploadedImage->move(public_path('CarType') . '/' . $car_type_id, $webpImageName);

            // Run the cwebp command to convert the image to WebP
            $cwebpCommand = "cwebp $imagePath -o  80"; // Set quality (adjust as needed)
            exec($cwebpCommand);

            // Update the brand_logo in the Brand record
            $car_type_update->car_type_image = $webpImageName;
            $car_type_update->update();
            }

            // Update the car_type_name with the new value
            $car_type_update->car_type_name = $request->car_type_name;
            $car_type_update->status = $request->has('status') ? 1 : 0;
            $car_type_update->update();

            session()->flash('success', 'Car Type updated successfully.');
        } else {
            session()->flash('error', 'Something went wrong!');
        }

        return redirect()->route('car_type.view');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car_type_destroy = CarType::where('car_type_id', decrypt($id))->first();
        $imagePath = 'CarType/' . $car_type_destroy->car_type_id;
        if ($car_type_destroy) {
            if (File::isDirectory($imagePath)) {

                File::deleteDirectory($imagePath);
                $car_type_destroy->delete();
            }

            session()->flash('success', 'Car Type delete successfully.');
        } else {
            session()->flash('error', 'something went wrong!');
        }
        return redirect()->route('car_type.view');
    }

    public function toggleStatus(Request $request)
    {
        $Id = $request->input('Id');
        // Perform the database update logic
        DB::table('car_types')
            ->where('car_type_id', $Id)
            ->update(['status' => DB::raw('IF(status = 1, 0, 1)')]);

        return response()->json(['message' => 'Status updated successfully']);
    }
}
