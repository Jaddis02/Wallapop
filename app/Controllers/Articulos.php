<?php

namespace App\Controllers;

use App\Models\ArticulosModel;

class Articulos extends BaseController
{

public function mostrar_articulo(): string
    {
        $datos['seleccionado']='articulos';
        return view('form_articulo').
        view('templates/menu_lateral',$datos).
        view('templates/footer');
    }

    //Esta función guarda los datos recibidos por POST a la tabla de artículos
    public function guardar(){
        
        $data=[];

        $data['nombre']=$this->request->getPost('nombre');
        $data['marca']=$this->request->getPost('marca');
        $data['precio']=$this->request->getPost('precio');
        
        
        //Obtener la imagen
        $imagen = $this->request->getFile('imagen');
        
        if ($imagen!=null){
            //Asignar un nombre aleatorio a la imagen
        $nombreImagen=$imagen->getRandomName();
        
        $data['imagen']=$nombreImagen;
        $imagen->move('../public/imagenes',$nombreImagen);

        }
        
        //Guarda la imagen obtenida en un directorio "imagenes"
        
        $modelo=model(ArticulosModel::class);
        $modelo->save($data);

        $data['guardado']=true;
        $data['titulo']='Alta de artículo';
        return view('guardado_exitoso.php');
    }


    
    public function mostrarTodo()
    {
        $modelo = model(ArticulosModel::class);
        $articulos = $modelo->findAll();
        $data['titulo']='Detalle de articulo';
        $data['articulos']=$articulos;
        return view('listaArticulos.php');
    }



    public function crear(){

        $modelo = model(ArticulosModel::class);
        $articulos = $modelo->getArticulos(); 
        helper('form');

        $datos_validacion = [
            'nombre' => 'required|min_length[3]|max_length[255]', // Estas son reglas de validación
            'marca' => 'required|min_length[7]|max_length[1000]',
            'precio' => 'required',
            'imagen' => 'required'
        ];

        if(!$this->validate($datos_validacion)) // Datos incorrectos
        {
            return $this->crear(); // Devolvemos al usuario a la función donde se muestra el formulario
        }

        // Si los datos son correctos hemos llegado hasta aquí y sólo tenemos que guardar los datos
        // en la BD:

        // Obtenemos los datos validados
        $post = $this->validator->getValidated();

        $modelo = model(ArticulosModel::class); // Obtenemos el modelo

        $modelo->save([
            'nombre' => $post['nombre'],
            'descripcion'  => $post['descripcion'],
            'precio'  => $post['precio'],
            'imagen'  => $post['imagen'],
        ]); 

        $data['datos_guardados'] = true;
        return view('templates/head', $data).view('crear_articulo.php').view('templates/footer');

        }


}


