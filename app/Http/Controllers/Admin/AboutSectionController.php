<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutSectionRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\About_section;
use Illuminate\Contracts\View\View;


class AboutSectionController extends Controller
{
    function index() : View {

        $about_section = About_section::first();


        return view('admin.about-section.index', compact('about_section'));
    }
    function update(AboutSectionRequest $request) : RedirectResponse
    {

        $data = [
            'main' => $request->main,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('about_images', 'public');

            $data['image'] = $imagePath;
        }

        About_section::updateOrCreate(['id' => 1], $data);


        toastr()->success('Created Successfully');
        return redirect()->back();
    }


}
