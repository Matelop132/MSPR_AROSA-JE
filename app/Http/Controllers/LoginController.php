<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('accountLogin');
    }

     public function sendLogin(Request $request)
    {
        // Valider les donn�es du formulaire
        $validatedData = $request->validate([
            'identifiant' => 'required',
            'mot_de_passe' => 'required',
        ]);

        // Tentative de connexion
        $credentials = [
            'adresse_mail' => $validatedData['identifiant'], // Assurez-vous d'ajuster cela en fonction de votre mod�le utilisateur
            'password' => $validatedData['mot_de_passe'],
        ];

        if (Auth::attempt($credentials)) {
            // Authentification r�ussie, rediriger l'utilisateur vers la page souhait�e
            return redirect('/accueil')->with('success', 'Connexion r�ussie!');
        } else {
            // Authentification �chou�e, rediriger avec un message d'erreur
            return redirect()->back()->withErrors(['error' => 'Identifiants incorrects']);
        }
    }
}
