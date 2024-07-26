<?php

namespace App\Controllers;

use App\Models\ReservacionesModel;
use App\Models\DetalleReservacionModel;

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
        $reservaciones->delete($id);
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
    public function ordenarReservacionesAcendente(): string //ordena los reservaciones por id
    {
        $reservaciones = new reservacionesModel();
        $datos['datos'] = $reservaciones->orderBy('reservacion_id', 'ASC')->findAll();
        return view('reservaciones', $datos);
    }
    public function ordenarreservacionesDecendente(): string //ordena los reservaciones por id
    {
        $reservaciones = new reservacionesModel();
        $datos['datos'] = $reservaciones->orderBy('reservacion_id', 'DESC')->findAll();
        return view('reservaciones', $datos);
    } 
    public function ordenarClientesAcendente(): string //ordena los reservaciones por id
    {
        $reservaciones = new reservacionesModel();
        $datos['datos'] = $reservaciones->orderBy('cliente_id', 'ASC')->findAll();
        return view('reservaciones', $datos);
    }
    public function ordenarClienteDecendente(): string //ordena los reservaciones por id
    {
        $reservaciones = new reservacionesModel();
        $datos['datos'] = $reservaciones->orderBy('cliente_id', 'DESC')->findAll();
        return view('reservaciones', $datos);
    } 
}