<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Papel extends Model
{
	/*Criação da tabela no bd*/
	  protected $table = 'papeis';

	/*fillable significa o filtro do campos input's*/
	  protected $fillable = ['nome','descricao'];

/*metodo de relacionamento de papeis com usuarios*/
	  public function users(){
        return $this->belongsToMany(User::class);
    }
/*metodo de relacionamento de papeis com permissoes*/
     public function permissoes(){
        return $this->belongsToMany(Permissao::class);
    }
}
