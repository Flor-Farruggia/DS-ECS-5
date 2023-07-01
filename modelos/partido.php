<?php

 class Partido {
     public $Id;
     public $Fecha;
     public $Arbitro;
     public $EquipoLocal;
     public $EquipoVisitante;

     public function MostrarDatos(){
         echo 'Datos del partido: '.'<br>';
         echo 'Id: '.$this->Id.'<br>';
         echo 'Fecha: '.$this->Fecha.'<hr>';

         echo '*Datos del arbitro'.'<br>';
         echo 'Id: '.$this->Arbitro->Id.'<br>';
         echo 'Nombre: '.$this->Arbitro->Nombre.'<br>';
         echo 'Apellido: '.$this->Arbitro->Apellido.'<br>';
         echo 'Gremio: '.$this->Arbitro->Gremio.'<hr>';

         echo '*Datos del equipo Local '.'<br>';
         echo 'Id del equipo: '.$this->EquipoLocal->Id.'<br>';
         echo 'Nombre: '.$this->EquipoLocal->NombreEquipo.'<br>';
         echo '**Datos del DT: '.'<br>';
         echo '___Id del DT: '.$this->EquipoLocal->DirectorTecnico->Id.'<br>';
         echo '___Nombre del DT: '.$this->EquipoLocal->DirectorTecnico->Nombre.'<br>';
         echo '___Apellido del DT: '.$this->EquipoLocal->DirectorTecnico->Apellido.'<br>';
         echo '#Lista de jugadores: '.'<br>';

         foreach ($this->EquipoLocal->ListaJugadores as $lj) {
            echo '___Id: '.$lj->Id.'<br>';
            echo '___Nombre: '.$lj->Nombre.'<br>';
            echo '___Apellido: '.$lj->Apellido.'<br>';
        }
            echo '<hr>'.'*Datos del equipo visitante '.'<br>';
            echo 'Id del equipo: '.$this->EquipoVisitante->Id.'<br>';
            echo 'Nombre: '.$this->EquipoVisitante->NombreEquipo.'<br>';
            echo '**Datos del DT: '.'<br>';
            echo '___Id del DT: '.$this->EquipoVisitante->DirectorTecnico->Id.'<br>';
            echo '___Nombre del DT: '.$this->EquipoVisitante->DirectorTecnico->Nombre.'<br>';
            echo '___Apellido del DT: '.$this->EquipoVisitante->DirectorTecnico->Apellido.'<br>';
            echo '#Lista de jugadores: '.'<br>';

            foreach ($this->EquipoVisitante->ListaJugadores as $lj) {
            echo '___Id: '.$lj->Id.'<br>';
            echo '___Nombre: '.$lj->Nombre.'<br>';
            echo '___Apellido: '.$lj->Apellido.'<br>';
        }
     }
 }