<?php

namespace App\Controllers;

use App\Models\HotelesModel;

class HotelesController extends BaseController
{
    public function index(): string
    {
        $hoteles = new HotelesModel();
        $datos['datos'] = $hoteles->findAll();
        return view('hoteles', $datos);
    }
    public function nuevoHotel():string{
        return view('agregarHotel');
    }
    public function agregarHotel(){
        $hoteles = new HotelesModel();
        $datos = [
            'hotel_id'=> $this->request->getVAR('numIdHotel'),
            'nombre'=> $this->request->getVAR('txtNombre'),
            'correoelectronico'=> $this->request->getVAR('txtCorreoElectronico'),
            'telefono'=> $this->request->getVAR('numTelefono'),
            'direccion'=> $this->request->getVAR('txtDireccion'),
            'ciudad_id'=> $this->request->getVAR('numCiudad'),
            'categoria_id'=> $this->request->getVAR('numCategoria'),
            'usuario_id'=> $this->request->getVAR('numUsuario')
        ];
        $hoteles->insert($datos);
        return redirect()->route('ver_hoteles');
    }
    public function eliminarHotel($id=null){
        $hoteles = new HotelesModel();
        $hoteles->delete(['hotel_id',$id]);
        return redirect()->route('ver_hoteles');
    }
    public function buscarHotel($id=null){
        $hoteles = new HotelesModel();
        $datos['datos'] = $hoteles->where('hotel_id',$id)->first();
        return view('modificarHotel',$datos);
    }
    public function modificarHotel(){
        $datos = [
            'hotel_id'=> $this->request->getVAR('numIdHotel'),
            'nombre'=> $this->request->getVAR('txtNombre'),
            'correoelectronico'=> $this->request->getVAR('txtCorreoElectronico'),
            'telefono'=> $this->request->getVAR('numTelefono'),
            'direccion'=> $this->request->getVAR('txtDireccion'),
            'ciudad_id'=> $this->request->getVAR('numCiudad'),
            'categoria_id'=> $this->request->getVAR('numCategoria'),
            'usuario_id'=> $this->request->getVAR('numUsuario')
        ];
        $hoteles = new HotelesModel();
        $hoteles->update($datos['hotel_id'],$datos);
        return redirect()->route('ver_hoteles');
    }
}