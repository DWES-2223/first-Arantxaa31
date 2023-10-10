<?php
include_once('Person.php');
include_once('Worker.php');
include_once('Manager.php');
include_once('Employee.php');
include_once('Enterprise.php');
$empleado = new Employee(horasTrabajadas: 150,precioPorHora: 12, nombre:'Pepe',apellidos: 'Botera',edat: '24');
 $manager = new Manager(salari: 4000, nombre:'Ignasi',apellidos: 'Gomis Mullor',edat: '54');
$empresa = new Enterprise('CIP FP BATOI','Serreta 8');
$empresa->addWorker($empleado);
$empresa->addWorker($manager);
var_dump($empresa);