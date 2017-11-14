<?php

use Illuminate\Database\Seeder;
use App\Profesor;
use App\Materia;


class ProfesorsMateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesors')->insert([
			'nombre'=>'Alejandro Sierra Múnera',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Alexander Martin Herrera Castro',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Alexandra Pomares Quimbaya',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Alicia Mercedes Arenas Valderrama',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Alvaro Fernando Quintero González',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Ana Cecilia Pachon Monroy',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Anabel Montero Posada',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Andrea García Tenorio',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Andrea del Pilar Rueda Olarte',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Andrés Felipe Murcia López',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Angela Cristina Carrillo Ramos',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Camilo Andres Canon Correa',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Carlos Alberto Ferrer Infante',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Carlos Alberto Jimenez Lagos',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Carlos Andres Rodriguez Morales',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Carlos Antonio Navarrete Puentes',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Carlos Camilo Rey Torres',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Cesar Julio Bustacara Medina',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Edgar Enrique Ruiz Garcia',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Efrain Ortiz Pabon',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Enrique Gonzalez Guerrero',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Fabio Ivan Aroca Lara',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Federico Arboleda Bradford',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Fernando Gonzalez Saravia',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Gabriel Eduardo Ávila Buitrago',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'German Alberto Chavarro Florez',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Gustavo Andres Salazar Garzon',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Holman Diego Bolívar Barón',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Hugo Ignacio Baron Fernandez',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Jaime Andrés Pavlich Mariscal',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Javier Francisco Lopez Parra',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Javier Mauricio Morales Chavarro',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Jimmy Alexander Cifuentes Rodríguez',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'John Gunther Agredo Ariza',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Jorge Eduardo Torres Manrique',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Jose Hernando Hurtado Rojas',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Jose Joaquin Bocanegra Garcia',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Juan Castro Cruz',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Julian Camilo Daza Rodriguez',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Julio Ernesto Carreno Vargas',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Laura Juliana Cortés Rico',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Leonardo Florez Valencia',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Luis Alberto Ostos Duarte',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Luis Carlos Moreno Medina',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Luis Guillermo Mora Parra',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Luis Guillermo Torres Ribero',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Luis Leonardo Quesada Gomez',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Luisa Fernanda Barrera Leon',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Maria Catalina Arevalo Vargas',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Maria Isabel Serrano Gomez',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Mariela Josefina Curiel Huérfano',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Miguel Eduardo Torres Moreno',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Pedro Luis Camargo Fonseca',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Rafael Alberto Reyes Jalizev',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Rafael Andres Gonzalez Rivera',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Rafael Mauricio Valderrama Ronderos',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Rafael Vicente Paez Mendez',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Raul Andres Rodriguez Hernandez',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Ricardo Jorge Naranjo Faccini',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Robinson Andrés Jaque Piraban',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Yois Katherine Espindola Buitrago',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);
		DB::table('profesors')->insert([
			'nombre'=>'Yuli Caterine Mancipe Chicaguy',
			'departamento' => 'Ingeniería de Sistemas',
			'imagen' => file_get_contents('public/imgs/logo_transparente.png')
		]);

		// materias
		DB::table('materias')->insert([
			'nombre'=>'Administración Básica Linux',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Admón. Sistemas de Información',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Análisis de Algoritmos',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Análisis y Diseño O.O.',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Arquitectura de Software',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Bases de Datos',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Comunicaciones y Redes',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Estructuras de Datos',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Fundamentos Redes e Internet',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Gerencia y Gestión Informática',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Hoja de Cálculo II',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Hoja de cálculo nivel avanzado',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Hoja de cálculo nivel básico',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Informática Administradores',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Ingeniería de Software',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Interacción Hombre-Máquina',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Intro. Sistemas Distribuidos',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Introducción Ing. de Sistemas',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Introducción a Bases de Datos',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Introducción a la Computación',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Lenguajes de Programación',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Matemática Computacional',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Minería de Datos',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Modelos E-Business',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Pensamiento Algorítmico',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Pensamiento Sistémico',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Person.Info.Amb.Nómadas',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Presentaciones Multimedia',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Prog. Orientada Objetos',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Programación de Computadores',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Programación en la Web',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Proyecto Especial ISistemas',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Pry. Social Univers. ISist',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Seminario Metod. Investigación',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Sistemas Informac. Geográfica',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Sistemas Operativos',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Sistemas de Información',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Tecnología Aplicad Información',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);
		DB::table('materias')->insert([
			'nombre'=>'Técnicas de Seg. Informática',
			'departamento'=>'Ingeniería de Sistemas',
			'prerequisito'=>'',
			]);

		// relations

		$profesor = Profesor::where('nombre','Alejandro Sierra Múnera')->first();
		$materia = Materia::where('nombre','Bases de Datos')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Alexander Martin Herrera Castro')->first();
		$materia = Materia::where('nombre','Hoja de Cálculo II')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Alexandra Pomares Quimbaya')->first();
		$materia = Materia::where('nombre','Minería de Datos')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Alicia Mercedes Arenas Valderrama')->first();
		$materia = Materia::where('nombre','Pensamiento Algorítmico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Alvaro Fernando Quintero González')->first();
		$materia = Materia::where('nombre','Bases de Datos')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Alvaro Fernando Quintero González')->first();
		$materia = Materia::where('nombre','Pensamiento Algorítmico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Ana Cecilia Pachon Monroy')->first();
		$materia = Materia::where('nombre','Informática Administradores')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Ana Cecilia Pachon Monroy')->first();
		$materia = Materia::where('nombre','Informática Administradores')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Ana Cecilia Pachon Monroy')->first();
		$materia = Materia::where('nombre','Hoja de cálculo nivel básico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Ana Cecilia Pachon Monroy')->first();
		$materia = Materia::where('nombre','Hoja de Cálculo II')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Anabel Montero Posada')->first();
		$materia = Materia::where('nombre','Ingeniería de Software')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Anabel Montero Posada')->first();
		$materia = Materia::where('nombre','Análisis y Diseño O.O.')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Andrea García Tenorio')->first();
		$materia = Materia::where('nombre','Pensamiento Sistémico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Andrea del Pilar Rueda Olarte')->first();
		$materia = Materia::where('nombre','Estructuras de Datos')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Andrea del Pilar Rueda Olarte')->first();
		$materia = Materia::where('nombre','Programación de Computadores')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Andrés Felipe Murcia López')->first();
		$materia = Materia::where('nombre','Hoja de cálculo nivel básico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Angela Cristina Carrillo Ramos')->first();
		$materia = Materia::where('nombre','Prog. Orientada Objetos')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Angela Cristina Carrillo Ramos')->first();
		$materia = Materia::where('nombre','Seminario Metod. Investigación')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Angela Cristina Carrillo Ramos')->first();
		$materia = Materia::where('nombre','Person.Info.Amb.Nómadas')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Camilo Andres Canon Correa')->first();
		$materia = Materia::where('nombre','Pensamiento Algorítmico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Camilo Andres Canon Correa')->first();
		$materia = Materia::where('nombre','Pensamiento Algorítmico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Carlos Alberto Ferrer Infante')->first();
		$materia = Materia::where('nombre','Hoja de Cálculo II')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Carlos Alberto Jimenez Lagos')->first();
		$materia = Materia::where('nombre','Programación de Computadores')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Carlos Andres Rodriguez Morales')->first();
		$materia = Materia::where('nombre','Hoja de Cálculo II')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Carlos Andres Rodriguez Morales')->first();
		$materia = Materia::where('nombre','Hoja de Cálculo II')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Carlos Antonio Navarrete Puentes')->first();
		$materia = Materia::where('nombre','Prog. Orientada Objetos')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Carlos Camilo Rey Torres')->first();
		$materia = Materia::where('nombre','Matemática Computacional')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Cesar Julio Bustacara Medina')->first();
		$materia = Materia::where('nombre','Proyecto Especial ISistemas')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Edgar Enrique Ruiz Garcia')->first();
		$materia = Materia::where('nombre','Introducción Ing. de Sistemas')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Edgar Enrique Ruiz Garcia')->first();
		$materia = Materia::where('nombre','Comunicaciones y Redes')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Edgar Enrique Ruiz Garcia')->first();
		$materia = Materia::where('nombre','Programación de Computadores')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Efrain Ortiz Pabon')->first();
		$materia = Materia::where('nombre','Gerencia y Gestión Informática')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Enrique Gonzalez Guerrero')->first();
		$materia = Materia::where('nombre','Sistemas Operativos')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Enrique Gonzalez Guerrero')->first();
		$materia = Materia::where('nombre','Sistemas Operativos')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Fabio Ivan Aroca Lara')->first();
		$materia = Materia::where('nombre','Modelos E-Business')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Federico Arboleda Bradford')->first();
		$materia = Materia::where('nombre','Matemática Computacional')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Fernando Gonzalez Saravia')->first();
		$materia = Materia::where('nombre','Admón. Sistemas de Información')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Fernando Gonzalez Saravia')->first();
		$materia = Materia::where('nombre','Pensamiento Sistémico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Gabriel Eduardo Ávila Buitrago')->first();
		$materia = Materia::where('nombre','Estructuras de Datos')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Gabriel Eduardo Ávila Buitrago')->first();
		$materia = Materia::where('nombre','Pensamiento Algorítmico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','German Alberto Chavarro Florez')->first();
		$materia = Materia::where('nombre','Pensamiento Algorítmico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','German Alberto Chavarro Florez')->first();
		$materia = Materia::where('nombre','Pensamiento Algorítmico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Gustavo Andres Salazar Garzon')->first();
		$materia = Materia::where('nombre','Hoja de Cálculo II')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Holman Diego Bolívar Barón')->first();
		$materia = Materia::where('nombre','Pensamiento Algorítmico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Hugo Ignacio Baron Fernandez')->first();
		$materia = Materia::where('nombre','Informática Administradores')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Hugo Ignacio Baron Fernandez')->first();
		$materia = Materia::where('nombre','Hoja de cálculo nivel básico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Jaime Andrés Pavlich Mariscal')->first();
		$materia = Materia::where('nombre','Lenguajes de Programación')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Jaime Andrés Pavlich Mariscal')->first();
		$materia = Materia::where('nombre','Programación en la Web')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Jaime Andrés Pavlich Mariscal')->first();
		$materia = Materia::where('nombre','Seminario Metod. Investigación')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Javier Francisco Lopez Parra')->first();
		$materia = Materia::where('nombre','Admón. Sistemas de Información')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Javier Francisco Lopez Parra')->first();
		$materia = Materia::where('nombre','Introducción Ing. de Sistemas')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Javier Francisco Lopez Parra')->first();
		$materia = Materia::where('nombre','Sistemas Informac. Geográfica')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Javier Francisco Lopez Parra')->first();
		$materia = Materia::where('nombre','Seminario Metod. Investigación')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Javier Mauricio Morales Chavarro')->first();
		$materia = Materia::where('nombre','Prog. Orientada Objetos')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Jimmy Alexander Cifuentes Rodríguez')->first();
		$materia = Materia::where('nombre','Programación en la Web')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','John Gunther Agredo Ariza')->first();
		$materia = Materia::where('nombre','Admón. Sistemas de Información')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','John Gunther Agredo Ariza')->first();
		$materia = Materia::where('nombre','Admón. Sistemas de Información')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','John Gunther Agredo Ariza')->first();
		$materia = Materia::where('nombre','Tecnología Aplicad Información')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','John Gunther Agredo Ariza')->first();
		$materia = Materia::where('nombre','Introducción a la Computación')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','John Gunther Agredo Ariza')->first();
		$materia = Materia::where('nombre','Presentaciones Multimedia')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Jorge Eduardo Torres Manrique')->first();
		$materia = Materia::where('nombre','Tecnología Aplicad Información')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Jose Hernando Hurtado Rojas')->first();
		$materia = Materia::where('nombre','Introducción Ing. de Sistemas')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Jose Hernando Hurtado Rojas')->first();
		$materia = Materia::where('nombre','Pensamiento Algorítmico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Jose Hernando Hurtado Rojas')->first();
		$materia = Materia::where('nombre','Pensamiento Algorítmico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Jose Joaquin Bocanegra Garcia')->first();
		$materia = Materia::where('nombre','Ingeniería de Software')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Juan Castro Cruz')->first();
		$materia = Materia::where('nombre','Hoja de cálculo nivel básico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Juan Castro Cruz')->first();
		$materia = Materia::where('nombre','Hoja de Cálculo II')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Julian Camilo Daza Rodriguez')->first();
		$materia = Materia::where('nombre','Pensamiento Algorítmico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Julian Camilo Daza Rodriguez')->first();
		$materia = Materia::where('nombre','Programación de Computadores')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Julio Ernesto Carreno Vargas')->first();
		$materia = Materia::where('nombre','Análisis y Diseño O.O.')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Julio Ernesto Carreno Vargas')->first();
		$materia = Materia::where('nombre','Arquitectura de Software')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Julio Ernesto Carreno Vargas')->first();
		$materia = Materia::where('nombre','Seminario Metod. Investigación')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Laura Juliana Cortés Rico')->first();
		$materia = Materia::where('nombre','Pensamiento Algorítmico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Leonardo Florez Valencia')->first();
		$materia = Materia::where('nombre','Análisis de Algoritmos')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Leonardo Florez Valencia')->first();
		$materia = Materia::where('nombre','Estructuras de Datos')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Leonardo Florez Valencia')->first();
		$materia = Materia::where('nombre','Seminario Metod. Investigación')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Leonardo Florez Valencia')->first();
		$materia = Materia::where('nombre','Proyecto Especial ISistemas')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luis Alberto Ostos Duarte')->first();
		$materia = Materia::where('nombre','Informática Administradores')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luis Alberto Ostos Duarte')->first();
		$materia = Materia::where('nombre','Informática Administradores')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luis Alberto Ostos Duarte')->first();
		$materia = Materia::where('nombre','Hoja de cálculo nivel básico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luis Alberto Ostos Duarte')->first();
		$materia = Materia::where('nombre','Hoja de cálculo nivel básico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luis Alberto Ostos Duarte')->first();
		$materia = Materia::where('nombre','Hoja de cálculo nivel básico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luis Alberto Ostos Duarte')->first();
		$materia = Materia::where('nombre','Hoja de cálculo nivel básico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luis Alberto Ostos Duarte')->first();
		$materia = Materia::where('nombre','Hoja de cálculo nivel básico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luis Alberto Ostos Duarte')->first();
		$materia = Materia::where('nombre','Hoja de Cálculo II')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luis Carlos Moreno Medina')->first();
		$materia = Materia::where('nombre','Pensamiento Algorítmico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luis Guillermo Mora Parra')->first();
		$materia = Materia::where('nombre','Admón. Sistemas de Información')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luis Guillermo Mora Parra')->first();
		$materia = Materia::where('nombre','Admón. Sistemas de Información')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luis Guillermo Mora Parra')->first();
		$materia = Materia::where('nombre','Tecnología Aplicad Información')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luis Guillermo Torres Ribero')->first();
		$materia = Materia::where('nombre','Programación en la Web')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luis Leonardo Quesada Gomez')->first();
		$materia = Materia::where('nombre','Informática Administradores')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luis Leonardo Quesada Gomez')->first();
		$materia = Materia::where('nombre','Informática Administradores')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luis Leonardo Quesada Gomez')->first();
		$materia = Materia::where('nombre','Introducción a Bases de Datos')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luis Leonardo Quesada Gomez')->first();
		$materia = Materia::where('nombre','Introducción a Bases de Datos')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luis Leonardo Quesada Gomez')->first();
		$materia = Materia::where('nombre','Hoja de cálculo nivel básico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luis Leonardo Quesada Gomez')->first();
		$materia = Materia::where('nombre','Hoja de cálculo nivel avanzado')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luis Leonardo Quesada Gomez')->first();
		$materia = Materia::where('nombre','Hoja de Cálculo II')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luisa Fernanda Barrera Leon')->first();
		$materia = Materia::where('nombre','Introducción Ing. de Sistemas')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luisa Fernanda Barrera Leon')->first();
		$materia = Materia::where('nombre','Análisis y Diseño O.O.')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Luisa Fernanda Barrera Leon')->first();
		$materia = Materia::where('nombre','Pry. Social Univers. ISist')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Maria Catalina Arevalo Vargas')->first();
		$materia = Materia::where('nombre','Hoja de cálculo nivel básico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Maria Catalina Arevalo Vargas')->first();
		$materia = Materia::where('nombre','Hoja de cálculo nivel básico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Maria Catalina Arevalo Vargas')->first();
		$materia = Materia::where('nombre','Hoja de Cálculo II')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Maria Catalina Arevalo Vargas')->first();
		$materia = Materia::where('nombre','Hoja de Cálculo II')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Maria Catalina Arevalo Vargas')->first();
		$materia = Materia::where('nombre','Hoja de Cálculo II')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Maria Catalina Arevalo Vargas')->first();
		$materia = Materia::where('nombre','Hoja de Cálculo II')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Maria Isabel Serrano Gomez')->first();
		$materia = Materia::where('nombre','Informática Administradores')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Maria Isabel Serrano Gomez')->first();
		$materia = Materia::where('nombre','Fundamentos Redes e Internet')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Mariela Josefina Curiel Huérfano')->first();
		$materia = Materia::where('nombre','Sistemas Operativos')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Mariela Josefina Curiel Huérfano')->first();
		$materia = Materia::where('nombre','Sistemas Operativos')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Miguel Eduardo Torres Moreno')->first();
		$materia = Materia::where('nombre','Sistemas de Información')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Pedro Luis Camargo Fonseca')->first();
		$materia = Materia::where('nombre','Informática Administradores')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Pedro Luis Camargo Fonseca')->first();
		$materia = Materia::where('nombre','Informática Administradores')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Pedro Luis Camargo Fonseca')->first();
		$materia = Materia::where('nombre','Informática Administradores')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Pedro Luis Camargo Fonseca')->first();
		$materia = Materia::where('nombre','Hoja de cálculo nivel básico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Pedro Luis Camargo Fonseca')->first();
		$materia = Materia::where('nombre','Hoja de cálculo nivel básico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Pedro Luis Camargo Fonseca')->first();
		$materia = Materia::where('nombre','Hoja de Cálculo II')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Rafael Alberto Reyes Jalizev')->first();
		$materia = Materia::where('nombre','Interacción Hombre-Máquina')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Rafael Andres Gonzalez Rivera')->first();
		$materia = Materia::where('nombre','Pensamiento Sistémico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Rafael Mauricio Valderrama Ronderos')->first();
		$materia = Materia::where('nombre','Pensamiento Algorítmico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Rafael Vicente Paez Mendez')->first();
		$materia = Materia::where('nombre','Comunicaciones y Redes')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Rafael Vicente Paez Mendez')->first();
		$materia = Materia::where('nombre','Seminario Metod. Investigación')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Rafael Vicente Paez Mendez')->first();
		$materia = Materia::where('nombre','Intro. Sistemas Distribuidos')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Rafael Vicente Paez Mendez')->first();
		$materia = Materia::where('nombre','Técnicas de Seg. Informática')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Raul Andres Rodriguez Hernandez')->first();
		$materia = Materia::where('nombre','Pensamiento Algorítmico')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Ricardo Jorge Naranjo Faccini')->first();
		$materia = Materia::where('nombre','Administración Básica Linux')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Robinson Andrés Jaque Piraban')->first();
		$materia = Materia::where('nombre','Análisis de Algoritmos')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Yois Katherine Espindola Buitrago')->first();
		$materia = Materia::where('nombre','Informática Administradores')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
		$profesor = Profesor::where('nombre','Yois Katherine Espindola Buitrago')->first();
		$materia = Materia::where('nombre','Hoja de Cálculo II')->first();
		DB::table('materia_profesors')->insert([
			'idprof' => $profesor->id,
			'idmat' => $materia->id,
		]);
    }
}
