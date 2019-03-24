<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    	/*Criação da tabela no bd*/
	  protected $table = 'permissoes';
	  
	/*fillable significa o filtro do campos input's*/
	  protected $fillable = ['nome','descricao'];

/*metodo de relacionamento de permissoes com papeis*/
	   public function papeis(){
        return $this->belongsToMany(Papel::class);
    }
}
