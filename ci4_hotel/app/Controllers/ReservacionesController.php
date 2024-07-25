<?php

namespace App\Controllers;

use App\Models\ReservacionesModel;

class ReservacionesController extends BaseController
{
    public function index(): string //muestra todas las reservaciones
    {
        $reservaciones = new ReservacionesModel();
        $datos['datos'] = $reservaciones->findAll();
        return view('reservaciones', $datos);
    }
    public function nuevaReservacion():string{ //muestra el formulario para agregar una nueva reservacion
        return view('agregarReservacion');
    }
    public function agregarReservacion(){ //agrega una nueva reservacion
        $reservaciones = new ReservacionesModel();
        $datos = [
            'reservacion_id'=> $this->request->getVAR('numIdReservaciones'),
            'fecha'=> $this->request->getVAR('numFecha'),
            'cliente_id'=> $this->request->getVAR('numIdCliente'),
            'hotel_id'=> $this->request->getVAR('numIdHotel'),
            'descripcion'=> $this->request->getVAR('txtDescipcion'),
            'usuario_id'=> $this->request->getVAR('numIdUsuario')
        ];
        $reservaciones->insert($datos);  
        return redirect()->route('ver_reservaciones'); 

    }
    public function eliminarReservacion($id=null){ //elimina una reservacion
        
        $reservaciones = new ReservacionesModel();
        $reservaciones->delete(['reservacion_id',$id]);
        return redirect()->route('ver_reservaciones'); 

    }
    public function buscarReservacion($id=null){ //busca una reservacion
        
        $reservaciones = new ReservacionesModel();
        $datos['datos'] = $reservaciones->where('reservacion_id', $id)->first();
        return view('modificarReservacion',$datos); 
    }
    public function modificarReservacion(){ //modifica una reservacion
        $datos = [
            'reservacion_id'=> $this->request->getVAR('numIdReservaciones'),
            'fecha'=> $this->request->getVAR('numFecha'),
            'cliente_id'=> $this->request->getVAR('numIdCliente'),
            'hotel_id'=> $this->request->getVAR('numIdHotel'),
            'descripcion'=> $this->request->getVAR('txtDescipcion'),
            'usuario_id'=> $this->request->getVAR('numIdUsuario')
        ];
        $reservaciones = new ReservacionesModel();
        $reservaciones->update($datos['reservacion_id'],$datos);
        return redirect()->route('ver_reservaciones'); 

    }
}