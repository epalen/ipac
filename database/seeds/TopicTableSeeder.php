<?php

use Illuminate\Database\Seeder;
use App\Topic;

class TopicTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = array(
		[
			'name' 			=> 'Compras y Contrataciones',
			'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam mi quam, fermentum congue purus ultricies ut. Vivamus ultrices urna.',
			'created_at' 	=> new DateTime,
			'updated_at' 	=> new DateTime
			],
			[
			'name' 			=> 'Acceso a la Información',
			'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam mi quam, fermentum congue purus ultricies ut. Vivamus ultrices urna.',
			'created_at' 	=> new DateTime,
			'updated_at' 	=> new DateTime
			],
			[
			'name' 			=> 'Educación',
			'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam mi quam, fermentum congue purus ultricies ut. Vivamus ultrices urna.',
			'created_at' 	=> new DateTime,
			'updated_at' 	=> new DateTime
			],
			[
			'name' 			=> 'Organismos de Control',
			'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam mi quam, fermentum congue purus ultricies ut. Vivamus ultrices urna.',
			'created_at' 	=> new DateTime,
			'updated_at' 	=> new DateTime
			],
			[
			'name' 			=> 'Servicio Civil',
			'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam mi quam, fermentum congue purus ultricies ut. Vivamus ultrices urna.',
			'created_at' 	=> new DateTime,
			'updated_at' 	=> new DateTime
			],
			[
			'name' 			=> 'Infraestructura',
			'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam mi quam, fermentum congue purus ultricies ut. Vivamus ultrices urna.',
			'created_at' 	=> new DateTime,
			'updated_at' 	=> new DateTime
			],
			[
			'name' 			=> 'Energía',
			'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam mi quam, fermentum congue purus ultricies ut. Vivamus ultrices urna.',
			'created_at' 	=> new DateTime,
			'updated_at' 	=> new DateTime
			],
			[
			'name' 			=> 'Gestión Financiera',
			'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam mi quam, fermentum congue purus ultricies ut. Vivamus ultrices urna.',
			'created_at' 	=> new DateTime,
			'updated_at' 	=> new DateTime
			],
			[
			'name' 			=> 'Salud',
			'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam mi quam, fermentum congue purus ultricies ut. Vivamus ultrices urna.',
			'created_at' 	=> new DateTime,
			'updated_at' 	=> new DateTime
			],
			[
			'name' 			=> 'Agua',
			'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam mi quam, fermentum congue purus ultricies ut. Vivamus ultrices urna.',
			'created_at' 	=> new DateTime,
			'updated_at' 	=> new DateTime
			]
		);

		Topic::insert($data);
	}
}
