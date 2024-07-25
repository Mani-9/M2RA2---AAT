<?php

namespace App\Controllers;

use App\Models\ClientesModel;


class ClientesController extends BaseController
{
    public function index(): string //muestra todos los clientes
    {
        $clientes = new ClientesModel();
        $datos['datos'] = $clientes->findAll();
        return view('clientes', $datos);
    }
    public function nuevoCliente():string{ //muestra el formulario para agregar un nuevo cliente
        return view('agregarCliente');
    }
    public function agregarCliente(){ //agrega un nuevo cliente
        $clientes = new ClientesModel();
        $datos = [
           'cliente_id'=>$this->request->getVar('numIdCliente'),
           'nombre'=>$this->request->getVAR('txtNombre'),
           'apellido'=>$this->request->getVAR('txtApellido'),
           'nit'=>$this->request->getVAR('numNit'),
           'telefono'=>$this->request->getVAR('numTelefono'),
           'correo_electronico'=>$this->request->getVAR('txtCorreoElectronico'),
           'direccion'=>$this->request->getVAR('txtDireccion'),
           'contrasenia'=>$this->request->getVAR('numContrasena')
        ];
        $clientes->insert($datos);
        return redirect()->route('ver_clientes');
    }
    public function eliminarCliente($id=null)//elimina un cliente
    {
        $clientes = new ClientesModel();
        $clientes->delete($id);
        return redirect()->route('ver_clientes');
    }
    public function buscarCliente($id=null){ //busca un cliente
        $clientes = new ClientesModel();
        $datos['datos'] = $clientes->where('cliente_id',$id)->first();
        return view('modificarClientes',$datos);
    }
    public function modificarClientes(){//modifica un cliente
        $datos = [
            'cliente_id'=>$this->request->getVar('numIdCliente'),
            'nombre'=>$this->request->getVAR('txtNombre'),
            'apellido'=>$this->request->getVAR('txtApellido'),
            'nit'=>$this->request->getVAR('numNit'),
            'telefono'=>$this->request->getVAR('numTelefono'),
            'correo_electronico'=>$this->request->getVAR('txtCorreoElectronico'),
            'direccion'=>$this->request->getVAR('txtDireccion'),
            'contrasenia'=>$this->request->getVAR('numContrasena')
         ];
         $clientes = new ClientesModel();
         $clientes->update($datos['cliente_id'],$datos);
         return redirect()->route('ver_clientes');
    }

   
}