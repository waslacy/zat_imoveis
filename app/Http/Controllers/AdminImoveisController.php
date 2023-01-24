<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;

class AdminImoveisController extends Controller
{
    /**
    *
    * Funcões imóveis
    *  
    */
    public function indexImovel()
    {
        if (!session('user_logged')) {
            return redirect('/login');
        }

        $imoveis = Imovel::get();

        return view('admin/imoveis')
        ->with('imoveis', $imoveis);
    }
}
