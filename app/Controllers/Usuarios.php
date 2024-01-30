<?php

// app>Controllers>Usuarios.php>Usuarios(clase)>catalogo(función)>view(vista)[articulos.php](nombre de la vista);

namespace App\Controllers;

use App\Models\UsuariosModel;

class Usuarios extends BaseController
{

    //Registrarse

    public function registrarse(){
        $data=[];
        $data['nombre']=$this->request->getPost('nombre');
        $data['password']=$this->request->getPost('password');

        //Obtiene los datos del modelo
        $modelo=model(UsuariosModel::class);
        $modelo->save($data);
        
        $data['guardado']=true;
        $data['titulo']='Registrado!';
        return view('registro_exitoso');
    }


    //Iniciar Sesión
    public function logIn()
    {
        $session = session();
        //Obtenemos el nombre
        $data['nombre'] = $this->request->getPost('nombre');
        // $session->set('nombre', $data['nombre']);

        //Obtenemos la contraseña
        $data['password']=$this->request->getPost('password');
        // $session->set('password', $data['password']);
        
        $modelo=model(UsuariosModel::class);
        $loginOk=$modelo->compruebaLogin($data['nombre'],$data['password']);

        if ($loginOk) {
     
            return view("sesion_exitoso.php").
            $session->get('nombre');
            echo 'Bienvenido de nuevo';
            
        }
        else
        {
            echo 'El usuario no existe';
            return view("usuario_noexiste.php");
            
        }
        // return view("inicio.php");
    }

    //Cerrar Sesión

    public function cerrarSesion(){
    $session = session();
    $session->destroy();
    return view('inicio.php');
    }
    

    //
    public function logOut(){
        $session = session();
        return view('inicio.php');
    }

    //Formulario regristro
    public function registro(): string
    {
        return view('form_usuario');
    }


    //Iniciar sesión
    public function iniciarSesion(): string
    {
        return view("login.php");
    }

    //Página dentro de login
    public function crear(): string
    {
        return view('crear_articulo.php');
    }

    public function inicioExitoso():string
    {
        return view('sesion_exitoso.php');
    }

    public function paginaArticulos()
    {
        return redirect()->to(base_url('/Articulos/mostrar_articulo'));
    }

    
}

//http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=wallapop&table=usuarios