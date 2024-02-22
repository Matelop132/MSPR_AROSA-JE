<?php
namespace App\Http\Controllers;

use App\Models\Plante;
use Illuminate\Http\Request;

class RemovePlantController extends Controller
{
    public function removePlant(Plante $plante)
    {
        // Mettez � jour le champ postee � true
        $plante->update(['postee' => false]);

        // Redirigez l'utilisateur vers la page des plantes de l'utilisateur
        return redirect()->route('allPlants');
    }
}
