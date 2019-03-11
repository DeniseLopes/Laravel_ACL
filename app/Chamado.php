<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;	

class Chamado extends Model
{
	/*encapsula os dados a serem filtrados, para o usuario não modificar um dado importante do banco de dados*/
    protected $fillable = ['user_id','titulo','descricao','status'];

	/*retorna os filtros e define o relacionamento 1 p 1*/
    public function user(){

    return $this->belongsTo('App\User');
    }

}
