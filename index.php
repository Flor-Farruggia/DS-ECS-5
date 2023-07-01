<?php
require_once 'modelos/partido.php';
require_once 'modelos/arbitro.php';
require_once 'modelos/directorTecnico.php';
require_once 'modelos/jugador.php';
require_once 'modelos/equipo.php';


$lj1 = new ListaJugadores();
$lj1->Id = 01;
$lj1->Nombre = 'Juan';
$lj1->Apellido = 'Perez';

$lj2 = new ListaJugadores();
$lj2->Id =02;
$lj2->Nombre ='Martin';
$lj2->Apellido ='Rodriguez';

$lj3 = new ListaJugadores();
$lj3->Id =03;
$lj3->Nombre ='Marcos';
$lj3->Apellido ='Romero';

$lj4 = new ListaJugadores();
$lj4->Id =04;
$lj4->Nombre ='Agustin';
$lj4->Apellido ='Rojas';

$dt1 = new DirectorTecnico();
$dt1->Id=01;
$dt1->Nombre= 'Jose';
$dt1->Apellido= 'Cuervo';

$dt2 = new DirectorTecnico();
$dt2->Id=02;
$dt2->Nombre= 'Pepe';
$dt2->Apellido= 'Don';

$el = new Equipo();
$el->Id=01;
$el->NombreEquipo='Tequila';
$el->DirectorTecnico =$dt1;
$el->ListaJugadores [] = $lj1;
$el->ListaJugadores [] = $lj2;

$ev = new Equipo();
$ev->Id=02;
$ev->NombreEquipo='Pepitos';
$ev->DirectorTecnico =$dt2;
$ev->ListaJugadores [] = $lj2;
$ev->ListaJugadores [] = $lj4;

$a = new Arbitro();
$a-> Id=01;
$a-> Nombre='Francisco';
$a->Apellido='Pio';
$a->Gremio='Pollitos';

$p = new Partido();
$p->Id=222;
$p->Fecha='20/02/2024';
$p->Arbitro=$a;
$p->EquipoLocal=$el;
$p->EquipoVisitante=$ev;

$p->MostrarDatos();