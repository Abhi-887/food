<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ServicesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServicesCreateRequest;
use App\Http\Requests\Admin\ServicesRequest;
use App\Models\Services;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ServicesDataTable $dataTable)
    {
        return $dataTable->render('admin.services.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServicesRequest $request) : RedirectResponse
    {
        $services = new Services();
        $services->color = $request->color;
        $services->icon = $request->icon;
        $services->title = $request->title;
        $services->description = $request->description;
        $services->link = $request->link;

        $services->status = $request->status;
        $services->save();

        toastr()->success('Created Successfully');

        return to_route('admin.services.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $services = Services::findOrFail($id);
        return view('admin.services.edit', compact('services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServicesRequest $request, string $id)
    {
        $services = Services::findOrFail($id);
        $services->color = $request->color;
        $services->icon = $request->icon;
        $services->title = $request->title;
        $services->description = $request->description;
        $services->link = $request->link;

        $services->status = $request->status;
        $services->save();

        toastr()->success('Created Successfully');

        return to_route('admin.services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Services::findOrFail($id)->delete();

            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        }catch(\Exception $e) {
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }
}
