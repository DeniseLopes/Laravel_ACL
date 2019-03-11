<?php

namespace App\Providers;

use App\Chamado;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**POLITICAS DE ACESSO
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
    'App\Chamado' => 'App\Policies\ChamadoTestePolicy',
    ];

    /**REGRAS DE SERVIÇOS
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //ver-chamado, Apenas o usuario que criou este serviço podera vizualizar
        //gate: recurso de autorização
        //Se o metodo retornar verdadeiro o usuario pode ver o chamado
/*
        Gate::define('ver-chamado', function
            ($user,Chamado $chamado){
                return $user->id == $chamado->user_id;
            });
  */
            
    }
}
