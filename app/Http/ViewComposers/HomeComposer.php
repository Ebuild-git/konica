<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\{Category,Service, config, Marque, produits};

class HomeComposer
{
 
    public function compose(View $view)
    {
        $view->with([
            'categories' => Category::has('produits')->take(8)->get(),
            'lastproduits' => produits::orderBy('created_at', 'desc')->take(9)->get(),
           'marques' => Marque::all(),

          //  'marques' =>Marque::has('produits')->take(6)->get(), /// Pour le home page
            'brands' =>Marque::has('produits')->get(), // Pour le  sop page
          // 'categorie'=>Category::all(),
            'configs' => config::all(),
            'services'=>Service::all(),
        ]);
    }
}