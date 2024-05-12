<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{


    public function envoyerEmail(Request $request)
    {
        // Validation des données du formulaire
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'email' => 'required|email',
            'sujet' => 'required',
            'message' => 'required',
            'phone' => 'nullable|string',
        ]);

        // Vérification des erreurs de validation
        if ($validator->fails()) {
            return response()->json(['message' => 'Veuillez remplir tous les champs du formulaire.'], 400);
        }

        // Récupération des données du formulaire
        $nom = $request->input('nom');
        $email = $request->input('email');
        $sujet = $request->input('sujet');
        $message = $request->input('message');
        $phone = $request->input('phone');

        // Envoi de l'e-mail
        Mail::raw($message, function ($m) use ($email, $nom, $sujet, $phone) {
            $m->from($email, $nom);
            $m->to('levisble@gmail.com')->subject($sujet . ' - Téléphone: ' . $phone);
            // $m->to('info@cipeccanada.org')->subject($sujet . ' - Téléphone: ' . $phone);
        });

        // Retourne une réponse JSON en cas de succès
        return response()->json(['message' => 'Votre message a été envoyé avec succès.']);
    }

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
