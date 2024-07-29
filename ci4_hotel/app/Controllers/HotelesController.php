<?php

namespace App\Controllers;

use App\Models\HotelesModel;

class HotelesController extends BaseController
{
    protected $helpers = ['url', 'form']; 
    public function index(): string //muestra todos los hoteles
    {
        $hoteles = new HotelesModel();
        $datos['datos'] = $hoteles->findAll();
        return view('hoteles', $datos);
    }
    public function nuevoHotel():string{ //muestra el formulario para agregar un nuevo hotel
        return view('agregarHotel');
    }
    public function agregarHotel() {
        $hoteles = new HotelesModel();
        $reglas = [ // reglas de validación
            'numIdHotel' => [
                'label' => 'ID Hotel',
                'rules' => 'required|is_unique[hoteles.hotel_id]',
                'errors' => [
                    'required' => '* El campo {field} es obligatorio.',
                    'is_unique' => '* El campo {field} debe ser único.'
                ],
            ],
            'txtCorreoElectronico' => [
                'label' => 'Correo Electrónico',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '* El campo {field} es obligatorio.'
                ],
            ],
            'numCiudad' => [
                'label' => 'ID Ciudad',
                'rules' => 'required|is_not_unique[ciudades.ciudad_id]',
                'errors' => [
                    'required' => '* El campo {field} es obligatorio.',
                    'is_not_unique' => '* Ingrese un Id de ciudad valido'
                ],
            ],
            'numCategoria' => [
                'label' => 'ID Categoría',
                'rules' => 'required|is_not_unique[categoria.categoria_id]',
                'errors' => [
                    'required' => '* El campo {field} es obligatorio.',
                    'is_not_unique' => '* Ingrese un Id de categoria valido'
                ],
            ],
            'numUsuario' => [
                'label' => 'ID Usuario',
                'rules' => 'required|is_not_unique[usuarios.usuario_id]',
                'errors' => [
                    'required' => '* El campo {field} es obligatorio.',
                    'is_not_unique' => '* Ingrese un Id de usuario valido'
                ],
            ]
        ];
    
        if (!$this->validate($reglas)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        echo 'Datos validados';
    
        $datos = [
            'hotel_id' => $this->request->getVar('numIdHotel'),
            'nombre' => $this->request->getVar('txtNombre'),
            'correo_electronico' => $this->request->getVar('txtCorreoElectronico'),
            'telefono' => $this->request->getVar('numTelefono'),
            'direccion' => $this->request->getVar('txtDireccion'),
            'ciudad_id' => $this->request->getVar('numCiudad'),
            'categoria_id' => $this->request->getVar('numCategoria'),
            'usuario_id' => $this->request->getVar('numUsuario')
        ];
    
        $hoteles->insert($datos);
        return redirect()->route('ver_hoteles');
    }
    
    public function eliminarHotel($id=null){ //elimina un hotel
        $hoteles = new HotelesModel();
        $hoteles->delete(['hotel_id',$id]);
        return redirect()->route('ver_hoteles');
    }
    public function buscarHotel($id=null){ //busca un hotel
        $hoteles = new HotelesModel();
        $datos['datos'] = $hoteles->where('hotel_id',$id)->first();
        return view('modificarHotel',$datos);
    }
    public function modificarHotel(){ //modifica un hotel
        $datos = [
            'hotel_id'=> $this->request->getVAR('numIdHotel'),
            'nombre'=> $this->request->getVAR('txtNombre'),
            'correo_electronico'=> $this->request->getVAR('txtCorreoElectronico'),
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
    public function ordenarHotelesAcendente(): string //ordena los hoteles por id
    {
        $hoteles = new HotelesModel();
        $datos['datos'] = $hoteles->orderBy('hotel_id', 'ASC')->findAll();
        return view('hoteles', $datos);
    }
    public function ordenarHotelesDecendente(): string //ordena los hoteles por id
    {
        $hoteles = new HotelesModel();
        $datos['datos'] = $hoteles->orderBy('hotel_id', 'DESC')->findAll();
        return view('hoteles', $datos);
    } 
}