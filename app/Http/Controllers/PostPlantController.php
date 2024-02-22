<?php
namespace App\Http\Controllers;

use App\Models\Plante;
use Illuminate\Http\Request;

class PostPlantController extends Controller
{
    public function postPlant(Plante $plante)
    {
        // Mettez � jour le champ postee � true
        $plante->update(['postee' => true]);

        // Redirigez l'utilisateur vers la page des plantes de l'utilisateur
        return redirect()->route('user.plantes');
    }
}
