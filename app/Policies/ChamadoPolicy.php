<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Chamado;

class ChamadoPolicy
{
    public function before($user, $ability)
    {
    
        if ($user->eAdmin()) {
        return true;
        }
    }

    public function verChamado($user, Chamado $chamado)
    {
        return $user->id == $chamado->user_id;
    }
}
