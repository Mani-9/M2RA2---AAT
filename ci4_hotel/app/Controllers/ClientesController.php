<?php

namespace App\Controllers;

use App\Models\ClientesModel;


class ClientesController extends BaseController
{
    protected $helpers = ['url', 'form']; 
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
        $reglas =[
            'numIdCliente'=>[
                'label'=>'ID Cliente',
                'rules'=>'required|is_unique[clientes.cliente_id]',
                'errors'=>[
                    'required'=>'* El campo {field} es obligatorio.',
                    'is_unique'=>'* El campo {field} debe ser único.'
                ],
            ],
            'txtCorreoElectronico'=>[
                'label'=>'Correo Electrónico',
                'rules'=>'required|valid_email',
                'errors'=>[
                    'required'=>'* El campo {field} es obligatorio.'
                ],
            ]
        ];
        if(!$this->validate($reglas)){
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());;
        }
        echo 'Datos validados';
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
    public function modificarClientes()
    {   
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
        $clientes = new ClientesModel();
        $clientes->update($datos['cliente_id'],$datos);
        return redirect()->route('ver_clientes'); 
    }
    public function ordenarClientesAcendente(): string //ordena los clientes por id
    {
        $clientes = new ClientesModel();
        $datos['datos'] = $clientes->orderBy('cliente_id', 'ASC')->findAll();
        return view('clientes', $datos);
    }
    public function ordenarClientesDecendente(): string //ordena los clientes por id
    {
        $clientes = new ClientesModel();
        $datos['datos'] = $clientes->orderBy('cliente_id', 'DESC')->findAll();
        return view('clientes', $datos);
    }   
}