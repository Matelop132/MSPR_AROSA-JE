<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserPlantesController extends Controller
{
    // UserPlantesController.php

    public function showPlantes()
    {
        // R�cup�rer l'utilisateur connect�
        $utilisateur = Auth::user();

        // R�cup�rer les plantes associ�es � l'utilisateur connect�
        $plantes = $utilisateur->plantes;

        // Retourner la vue avec les plantes
        return view('userPlantes', compact('plantes'));
    }
}
