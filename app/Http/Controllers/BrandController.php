<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarStage;

use File;
use App\Models\Brand;

use DB;

class BrandController extends Controller
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
        $CarStage_name = CarStage::get();
        return view("admin.brand.create", ['CarStage_name' => $CarStage_name]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'car_stage_id' => 'required',
            'brand_name' => 'required',
            'brand_logo' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        // Create a new Brand record with the WebP image
        $brand = new Brand();
        $brand->car_stage_id = $request->car_stage_id;
        $brand->brand_name = $request->brand_name;
        $brand->status = $request->has('status') ? 1 : 0;

        // Save the Brand record to get the brand_id
        $brand->save();

        // Get the brand_id after the record is saved
        $brand_id = $brand->brand_id;

        $uploadedImage = $request->file('brand_logo');
        $imageName = $brand_id . '.' . $uploadedImage->getClientOriginalExtension();
        $webpImageName = $brand_id . '.webp';
        $imagePath = public_path('brand') . '/' . $brand_id . '/' . $imageName;
        $webpImagePath = public_path('brand') . '/' . $brand_id . '/' . $webpImageName;

        $uploadedImage->move(public_path('brand') . '/' . $brand_id, $webpImageName);

        // Run the cwebp command to convert the image to WebP
        $cwebpCommand = "cwebp $imagePath -o $webpImagePath -q 80"; // Set quality (adjust as needed)
        exec($cwebpCommand);

        // Update the brand_logo in the Brand record
        $brand->brand_logo = $webpImageName;
        $brand->update();

        return redirect()->route('brand.view');

    }

    /**
     * Display the specified resource.
     */
    public function view()
    {
        $brand_view = Brand::select('brands.*', 'car_stages.car_stage_name as car_stage_name')
            ->leftJoin('car_stages', 'brands.car_stage_id', '=', 'car_stages.car_stage_id')
            ->get();
        // ->paginate(2);


        return view('admin.brand.view', ['brand_view' => $brand_view]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $brand_edit = Brand::where('brand_id', decrypt($id))->first();
        $CarStage_name = CarStage::get();

        return view("admin.brand.edit", ["CarStage_name" => $CarStage_name], ["brand_edit" => $brand_edit]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'car_stage_id' => 'required',
            'brand_name' => 'required',
            'brand_logo' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            // Remove 'webp' from mimes
        ]);

        $brand_update = Brand::where('brand_id', decrypt($id))->first();



        return redirect()->route('brand.view');


}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brand::where('brand_id', decrypt($id))->first();

        if ($brand) {
            // Define the file and folder paths
            $filePath = public_path('brand') . '/' . $brand->brand_name . '/' . $brand->brand_logo;
            $folderPath = public_path('brand') . '/' . $brand->brand_name;

            // Check if the file exists and delete it
            if (File::exists($filePath)) {
                File::delete($filePath);
            }

            // Check if the folder exists and delete it
            if (File::isDirectory($folderPath)) {
                File::deleteDirectory($folderPath);
            }

            // Delete the brand record
            $brand->delete();

            session()->flash('success', 'Brand and associated file/folder deleted successfully.');
        } else {
            session()->flash('error', 'Brand not found or something went wrong.');
        }

        return redirect()->route('brand.view');
    }
    public function toggleStatus(Request $request)
    {
        $Id = $request->input('Id');
        // Perform the database update logic
        DB::table('brands')
            ->where('brand_id', $Id)
            ->update(['status' => DB::raw('IF(status = 1, 0, 1)')]);

        return response()->json(['message' => 'Status updated successfully']);
    }
}
