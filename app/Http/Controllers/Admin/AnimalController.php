<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Vaccination;
use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAnimalRequest;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all();

        return view('admin.animals.index', compact('animals'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        return view('admin.animals.show', compact('animal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vaccinations = Vaccination::all();

        return view('admin.animals.create', compact('vaccinations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnimalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnimalRequest $request)
    {
        $form_data = $request->all();

        $animal = new Animal();

        if ($request->has('vaccinations')){

            $animal->vaccinations()->attach($request->vaccinations);
        }

        $animal->fill($form_data);

        $animal->save();

        return redirect()->route('admin.animals.index')->with('message', 'Creazione Animale Completata');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        $vaccinations = Vaccination::all();

        return view('admin.animals.edit', compact('animal', 'vaccinations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnimalRequest  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnimalRequest $request, Animal $animal)
    {
        $form_data = $request->all();

        if ($request->has('vaccinations')){

            $animal->vaccinations()->sync($request->vaccinations);
        }

        $animal->update($form_data);

        return redirect()->route('admin.animals.show', $animal->id)->with('message', 'Modifica Animale Completata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        if ($request->has('vaccinations')){

            $animal->vaccinations()->detach();
        }

        $animal->delete();

        return redirect()->route('admin.animals.index')->with('message', 'Cancellazione Animale Completata');
    }
}
