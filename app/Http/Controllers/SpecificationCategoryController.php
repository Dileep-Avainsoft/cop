<?php

namespace App\Http\Controllers;

use App\Models\SpecificationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpecificationCategoryController extends Controller
{
        public function create()
    {
        return view('admin.spec_category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'spec_cat_name' => 'required',
        ]);
        $spec_cat_store = new SpecificationCategory;
        if ($spec_cat_store) {
            $spec_cat_store->spec_cat_name = $request->spec_cat_name;
            $spec_cat_store->status = $request->has('status') ? 1 : 0;
            $spec_cat_store->save();
            session()->flash('success', 'Specification Category added successfully.');
        } else {
            session()->flash('error', 'Something went wrong.');
        }
        return redirect()->route('spec_cat.view');
    }

    public function view()
    {
        $spec_cat_view = SpecificationCategory::get();
        return view('admin.spec_category.view ', ['spec_cat_view' => $spec_cat_view]);
    }

    public function edit($id)
    {
        $spec_cat_edit = SpecificationCategory::where('spec_cat_id', decrypt($id))->first();
        return view('admin.spec_category.edit', ['spec_cat_edit' => $spec_cat_edit]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'spec_cat_name' => 'required'
        ]);
        $spec_cat_update = SpecificationCategory::where('spec_cat_id', decrypt($id))->first();

        if ($spec_cat_update) {
            $spec_cat_update->spec_cat_name = $request->spec_cat_name;
            $spec_cat_update->status = $request->has('status') ? 1 : 0;
            $spec_cat_update->save();
            session()->flash('success', 'Specification Category updated successfully.');
        } else {
            session()->flash('error', 'Something went wrong.');
        }

        return redirect()->route('spec_cat.view');
    }

    public function destroy($id)
    {
        $spec_cat_destroy = SpecificationCategory::where('spec_cat_id', decrypt($id))->first();

        if ($spec_cat_destroy) {
            $spec_cat_destroy->delete();
            session()->flash('success', 'Specification Category deleted successfully.');
        } else {
            session()->flash('error', 'Something went wrong.');
        }
        return redirect()->route('spec_cat.view');
    }
    public function toggleStatus(Request $request)
    {

        $id = $request->input('id');
        DB::table('specification_categories')
            ->where('spec_cat_id', $id)
            ->update(['status' => DB::raw('IF(status = 1, 0, 1)')]);
        return response()->json(['message' => 'Status updated successfully']);
    }
}
