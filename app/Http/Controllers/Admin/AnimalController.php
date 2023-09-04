<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Vaccination;
use App\Models\Disease;
use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAnimalRequest;
use Illuminate\Http\Request;

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

    public function search(Request $request){
        $query = Animal::query();
        
            if(isset($request->search) && ($request->search !=null)){

            $query->where('nome', 'LIKE', '%'.$request->search.'%');

            $animals = $query->get();
            }
            else{
                $animals = Animal::all();
            }

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

        $diseases = Disease::all();

        return view('admin.animals.create', compact('vaccinations', 'diseases'));
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

        $animal->fill($form_data);

        $animal->save();

        // GESTIONE RELAZIONI MANY-TO-MANY

            // if ($request->has('vaccinations')){

            //     $DateOfVaccinationArray = array_values(array_filter($request->data_di_vaccinazione));

            //     $DosageArray = array_values(array_filter($request->dosaggio));

            //     $NoteOfVaccinationArray = array_values(array_filter($request->note_vaccino));

            //     foreach($request->vaccinations as $index => $vaccination){

            //         $animal->vaccinations()->attach($vaccination, [

            //             'data_di_vaccinazione' => $DateOfVaccinationArray[$index],

            //             'dosaggio' => $DosageArray[$index],

            //             'note_vaccino' => $NoteOfVaccinationArray[$index],
            //         ]);   
            //     }
            // }

            if ($request->has('vaccinations')){

                $animal->vaccinations()->attach($request->vaccinations);
            }

            if ($request->has('diseases')){

                $animal->diseases()->attach($request->diseases);
            }

        // FINE GESTIONE RELAZIONI MANY-TO-MANY

        $nome_animale = $animal->nome;

        return redirect()->route('admin.animals.show', compact('animal'))->with('message', "Animale: '$nome_animale' Creato Correttamente");
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

        $diseases = Disease::all();

        return view('admin.animals.edit', compact('animal', 'vaccinations', 'diseases'));
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

        // GESTIONE RELAZIONI MANY-TO-MANY
            // if ($request->has('vaccinations')){

            //     $animal->vaccinations()->detach();

            //     $DateOfVaccinationArray = array_values(array_filter($request->data_di_vaccinazione));

            //     $DosageArray = array_values(array_filter($request->dosaggio));

            //     $NoteOfVaccinationArray = array_values(array_filter($request->note_vaccino));

            //     foreach($request->vaccinations as $index => $vaccination){

            //         $animal->vaccinations()->attach($vaccination, [

            //             'data_di_vaccinazione' => $DateOfVaccinationArray[$index],

            //             'dosaggio' => $DosageArray[$index],

            //             'note_vaccino' => $NoteOfVaccinationArray[$index],
            //         ]);   
            //     }
            // }

            if ($request->has('vaccinations')){

                $animal->vaccinations()->sync($request->vaccinations);
            }

            if ($request->has('diseases')){

                $animal->diseases()->sync($request->diseases);
            }

        // FINE GESTIONE RELAZIONI MANY-TO-MANY
        
        $nome_animale = $animal->nome;

        $animal->update($form_data);

        return redirect()->route('admin.animals.show', compact('animal'))->with('message', "Animale: '$nome_animale' Modificato Correttamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        $animal->vaccinations()->detach();

        $nome_animale = $animal->nome;

        $animal->delete();

        return redirect()->route('admin.animals.index')->with('message', "Animale: '$nome_animale' Cancellato Correttamente");
    }
}
