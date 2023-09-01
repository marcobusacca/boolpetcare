<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Models\Lead;
use App\Mail\NewContact;

class LeadController extends Controller
{
    //CREO LA FUNZIONE STORE

    public function store(Request $request){
        $data = $request->all();

            // VALIDIAMO I DATI
        $validator = Validator::make($data,[
            'name'    => 'required',
            'email'   => 'required|email',
            'content' => 'required',
        ]);

        // VERIFICO SE LA RICHIESTA NON VA A BUON FINE
        if($validator->fails()){


            return response()->json([
                'success' => false,
            'errors' =>  $validator->errors()

            ]);
            
        };


        //SALVO I DATI NEL DATABASE
        $new_lead = new Lead();
        $new_lead->fill($data);
        $new_lead->save();


        // INVIO LA MAIL
        Mail::to('contact@boolpetcare.com')->send(new NewContact($new_lead));


        return response()->json([
            'success' => true
        ]);

    }
}