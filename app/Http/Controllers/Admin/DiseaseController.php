<?php

namespace App\Http\Controllers\Admin;

use App\Models\Disease;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDiseaseRequest;
use App\Http\Requests\UpdateDiseaseRequest;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diseases = Disease::all();

        return view('admin.diseases.index', compact('diseases'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function show(Disease $disease)
    {
        return view('admin.diseases.show', compact('disease'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.diseases.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDiseaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDiseaseRequest $request)
    {
        $form_data = $request->all();

        $disease = new Disease();

        $disease->fill($form_data);

        $disease->save();

        $nome_malattia = $disease->nome;

        return redirect()->route('admin.diseases.show', compact('disease'))->with('message', "Malattia: '$nome_malattia' Creata Correttamente");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function edit(Disease $disease)
    {
        return view('admin.diseases.edit', compact('disease'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiseaseRequest  $request
     * @param  \App\Models\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiseaseRequest $request, Disease $disease)
    {
        $form_data = $request->all();

        $nome_malattia = $disease->nome;

        $disease->update($form_data);

        return redirect()->route('admin.diseases.show', compact('disease'))->with('message', "Malattia: '$nome_malattia' Modificata Correttamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disease $disease)
    {
        $disease->animals()->detach();

        $nome_malattia = $disease->nome;

        $disease->delete();

        return redirect()->route('admin.diseases.index')->with('message', "Malattia: '$nome_malattia' Cancellata Correttamente");
    }
}
