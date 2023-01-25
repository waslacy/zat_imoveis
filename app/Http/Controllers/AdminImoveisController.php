<?php

namespace App\Http\Controllers;

use App\Models\Condominio;
use Illuminate\Http\Request;
use App\Models\Imovel;
use App\Models\Proprietario;
use App\Models\Regiao;
use App\Models\TipoImovel;

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

    public function filtrarImovel(){
        if (!session('user_logged')) {
            return redirect('/login');
        }

        $imoveis = '';
    
        return view('admin/imoveis')
        ->with('imoveis', $imoveis);
    }

    public function cadastrarImovel($id)
    {   
        if($id = 'novo'){
            $tipo_imovels = TipoImovel::get();
            $condominios = Condominio::get();
            $regiaos = Regiao::get();
            $proprietarios = Proprietario::get();

            return view('admin/novoImovel')
            ->with('tipo_imovels', $tipo_imovels)
            ->with('condominios', $condominios)
            ->with('regiaos', $regiaos)
            ->with('proprietarios', $proprietarios);
        } else {

        }
    }
}
