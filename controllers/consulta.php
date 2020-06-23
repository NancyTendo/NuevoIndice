<?php

class Consulta extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->alumnos = [];  
        //echo "<p>Nuevo controlador Main</p>";
    }
    function render(){
        $alumnos = $this->model->get();
        $this->view->alumnos = $alumnos;
        $this->view->render('consulta/index');
    }

    function verAlumno($param =null){
      
        $idAlumno =$param[0];
        $alumno =$this->model->getById($idAlumno);

        session_start();
        $_SESSION['id_verAlumno'] = $alumno->matricula;
        $this->view->alumno = $alumno;
        $this->view->mensaje="";
        $this->view->render('consulta/detalle');
    }
    
    function actualizarAlumno(){
        session_start();
        $matricula = $_SESSION ['id_verAlumno'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        unset($_SESSION['$id_verAlumno']);

        if ($this->model->update(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])) {
            //actualizar alumno exitoso
            $alumno =new Alumno();
            $alumno->matricula = $matricula;
            $alumno->nombre = $nombre;
            $alumno->apellido = $apellido;

            $this->view->alumno = $alumno;
            $this->view->mensaje="alumno actualizado correctamente";
        }else{
            //error al actualizar
            $this->view->mensaje="Error al actualizar alumno";
        }
        $this->view->render('consulta/detalle');
    }
     
    function eliminarAlumno($param =null){
        $matricula= $param[0];

       if($this->model->delete($matricula)){
         //   $this->view->mensaje="alumno eliminado correctamente";
           $mensaje= "ALUMNO ELIMINADO CORRECTAMENTE";
        }else{
            //error al actualizar
           // $this->view->mensaje="No se pudo eliminar alumno";
           $mensaje="NO SE PUDO ELIMINAR EL ALUMNO";
        }
     //   $this->render(); */
  //   echo "Se Elimino " . $matricula;
    echo $mensaje;
    } 
}

?>