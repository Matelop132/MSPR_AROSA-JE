<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Plante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreatePlanteController extends Controller
{
    public function showPlanteCreationForm()
    {
        return view('planteCreation');
    }

    public function creationPlante(Request $request)

    {
        dump($request);
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'conseil_entretien' => 'required|string|max:255',
        ]);

        // R�cup�rez l'utilisateur actuellement authentifi�
        $utilisateur = Auth::user();

        // Utilisez la relation pour cr�er une plante associ�e � cet utilisateur
        $plante = $utilisateur->plantes()->create([
            'nom' => $validatedData['nom'],
            'image' => $validatedData['image'],
            'description' => $validatedData['description'],
            'conseil_entretien' => $validatedData['conseil_entretien'],
        ]);

        // Rediriger vers la page d'accueil ou une autre page appropri�e avec un message de succ�s
        return redirect('/accueil')->with('success', 'Plante cr��e avec succ�s!');
    }
}
