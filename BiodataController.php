<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class BiodataController extends Controller
{

    public function index()
    {
        $biodatas = Biodata::all(); 
        return view('biodatas.index', compact('biodatas'));
    }

    public function create()
    {
        return view('biodatas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
        ]);

        Biodata::create($request->all());
        return redirect()->route('biodatas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $biodata = Biodata::find($id);
        return view ('biodatas.edit', compact('biodata'));
    }

    public function update(Request $request, $id)
    {
        $biodata = Biodata::find($id);
        $biodata->update($request->all());
        return redirect()->route('biodatas.index');
    }

    public function destroy(string $id)
    {
        Biodata::find($id)->delete();
        return redirect()->route('biodatas.index');
    }
}