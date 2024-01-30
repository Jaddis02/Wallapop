<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table = 'usuarios';
    protected $allowedFields=['nombre','password'];

    public function getUsuarios(){
     return $this->findAll();
    }

    public function compruebaLogin($nombre,$password){
        $this->where('nombre', $nombre);
        $this->where('password', $password);

        $usuario = $this->first();

        if ($usuario!=null){
            return true;

        }else{
            return false;
        }

    }

}
