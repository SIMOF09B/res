<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Client;
use App\Models\Restaurant;

class filter_controller extends Controller
{
    public function filter(Request $request)
    {
        isset($request->etat) ? $etat = $request->etat : $etat = '%';
        isset($request->restaurant_id) ? $rest_id = $request->restaurant_id : $rest_id = '0';
        $restaurant = Restaurant::all();
        $commandes =  Commande::where('restaurant_id', (int)$rest_id)
            ->orWhere('etat', 'LIKE', $etat)->get();

        return view(
            'backoffice.commande.index',
            [
                'commandes' => $commandes,
                'restaurants' => $restaurant
            ]
        );
    }
    public function filterClient(Request $request)
    {

        isset($request->name) ? $custm_name = $request->name : $custm_name = '0';

        $clients =  Client::where('name', 'LIKE', $custm_name)
            ->get();

        return view(
            'backoffice.client.index',
            [
                'clients' => $clients

            ]
        );
    }
    public function filterrest(Request $request)
    {

        isset($request->name) ? $rest_name = $request->name : $rest_name = '%';

        $restaurant = Restaurant::where('name', 'LIKE', '%'.$rest_name.'%')
            ->get();

        return view(
            'backoffice.restaurant.index',
            [
                'restaurants' => $restaurant

            ]
        );
    }
}
