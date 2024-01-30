




<!-- 
{
 
public function Index(): String{
    $session=session();
    $session->set('nombre','Ramiro');
    
    $modelo = model(ArticulosModel::class);
    $data['articulos']=$modelo->getArticulos();

    return view('templates/head',$data)
    .view('templates/header')
    .view('home')
    .view('templates/footer');





    public function logOut(){
        session.logOut();
    }
    
}

} -->