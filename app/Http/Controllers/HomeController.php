<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chamado;
use Auth;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');//verifica se o usuario é autentico
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
       // $chamados = Chamado::where('user_id','=',$user->id)->get();//esse metodo filtra apenas os chamados relacionados ao id de cada user
        $chamados = Chamado::all();
        return view('home',compact('chamados'));
    }

    public function detalhe($id){

        $chamado = Chamado::find($id);
      //  $this->authorize('ver-chamado', $chamado);
        /*se não tem acesso
        if(Gate::denies('ver-chamado,$chamado')){
            abort(403,"Não autorizado!");
        }
       
        //se tem acesso
        if(Gate::allows('ver-chamado',$chamado)){
            
        }
        abort(403,"Não autorizado!");
         */

        return view('detalhe',compact('chamado'));
    }
}
