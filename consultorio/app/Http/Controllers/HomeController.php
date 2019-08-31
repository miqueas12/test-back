<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Contatos;
use App\Medicos;

class HomeController extends Controller{

	protected $modelCont;
	protected $modelMed;

	public function __construct(
        Contatos $modelCont,
        Medicos $modelMed
	){
        $this->modelCont = $modelCont;
        $this->modelMed = $modelMed;
    }

    public function index(Request $request){
    	return view('home');
    }

    public function medicos(){
        //$medicos = $this->modelMed->create([
        //    'nome' => 'Miqueas',
        //    'especialidade' => 'Programador',
        //    'celular' => '987151460',
        //    'descricao' => 'Profissa',
        //    'foto' => 'C:\xampp\htdocs\consultorio\public\image\pic-1.png',
        //$medico->nome = 'Miqueas';
        //$medico->especialidade = 'Programador';
        //$medico->celular = '987151460';
        //$medico->descricao = 'Profissa';
        //$medico->foto = 'C:\xampp\htdocs\consultorio\public\image\pic-1.png';
        //]);

        $medic = new Medicos;

        //$medicos = $medic::table('medicos')->get();
    	$medicos = Medicos::get();

        return view('medicos', ['medicos' => $medicos]);
    }

    public function obrigado(Request $request){
    	$contato = $this->modelCont->create([
			'nome' => $request->app_name,
			'email' => $request->app_email,
			'telefone' => $request->app_phone,
   		]);

        return view('obrigado');
    }

}