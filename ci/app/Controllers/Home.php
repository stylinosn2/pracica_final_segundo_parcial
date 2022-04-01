<?php
namespace App\Controllers;
use App\Models\mUsuarios;
class Home extends BaseController
{
    public function bienvenida()
    {
        $mensaje =session('mensaje');
        return view ('vBienveida',  ["mensaje" => $mensaje]);
    }
    public function registro()
    {
        return view ('vRegistro');
    }
    public function ingreso(){

        return view('vIngreso');
    }

    // public function acceder(){
    //     return view('vLogin');
    // }

    //  public function loging(){
    //     $correo = $this->request->getPost('correo');
    //     $contrasena = $this->request->getPost('contrasena');
    //     $correo = new mUsuarios();

    //     $datosUsuario = $Usuario->obtenerUsuario(['correo' => $correo]);

    //     if (count($datosUsuario)> 0 && password_verify($contrasena, $datosUsuario[0]['contrasena']) ) {

    //         $data = [
    //                     "correo" => $datosUsuario[0]['correo'],
    //                     "type" => $datosUsuario[0]['type']
    //                  ];
    //         $session = new session();
    //         $session->set($data);

    //         return redirect()->to(base_url('/inicio'))->with('mensaje','1');


    //     } else {
    //         return redirect()->to(base_url('/'))->with('mensaje','0');
    //     }
    // }



    public function insertarForm()

    {
        $mUsuarios = new mUsuarios();
        $usuarioNuevo =[
            "nombre" => $_POST['nombre'],
            "apellidos" => $_POST['apellidos'],
            "edad" => $_POST['edad'],
            "correo" => $_POST['correo'],
            "contrasena" => $_POST['contrasena']
        ];
        $mUsuarios->insert($usuarioNuevo);
        $datoId['idRegistrado'] = $mUsuarios->
        db->insertID();

        return view("vSucess", $datoId);
    }

    public function mostrarRegistros()
    {
        $mUsuarios = new mUsuarios();
        $todos=$mUsuarios->findAll();
        $usuarios=array('usuarios' =>$todos);

        return view ("vRegistros", $usuarios);
    }

    public function ingresarForm()
    {
        $mUsuarios = new mUsuarios();
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        $user=$mUsuarios->where('correo', $correo)->where('contrasena',$contrasena)->first();

        return view ("vIngresado", $user);

    }

    public function buscarRegistro(){
        $mUsuarios = new mUsuarios();
        $id_usuario = $_POST['id_usuario'];
        $correo=$mUsuarios->find($id_usuario);
        return view("vRegistroEncontrado",$correo);
    }
    public function actualizarRegistro(){
        $mUsuarios = new mUsuarios();
        $id_usuario = $_POST['id_usuario'];
        $usuarioActualizado=[
            "correo" => $_POST['correo'],
            "contrasena" => $_POST['contrasena']
        ];
        $mUsuarios->update($id_usuario, $usuarioActualizado);
        return $this->mostrarRegistros();
    }

    public function eliminarRegistro($id)
    {
        $mUsuarios = new mUsuarios();
        $id_usuario= $id;
        $mUsuarios->delete($id_usuario);

        return $this->mostrarRegistros();
    }
    
}
