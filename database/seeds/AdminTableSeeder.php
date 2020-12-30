<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTableSeeder extends Seeder
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
	        	'name' 				=> 'Nalda Yalina',
	        	'lastname'			=> 'Lizardo Zorrilla',
	        	'area'				=> 'Transparencia Gubernamental',
	        	'job_title'			=> 'Enc. Departamento Transparencia',
	        	'email'				=> 'nalda.lizardo@digeig.gob.do',
	        	'phone'				=> '8096857135',
	        	'gender'			=> 'Femenino',
	        	'extension'			=> '3008',
	        	'institution_id'	=> '67',
	        	'password'			=> bcrypt('123456'),
	        	'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
	        ],
			[
	        	'name' 				=> 'Saray',
	        	'lastname'			=> 'Acosta',
	        	'area'				=> 'Transparencia Gubernamental',
	        	'job_title'			=> 'Enc. Div. Gobierno Abierto',
	        	'email'				=> 'saray.acosta@digeig.gob.do',
	        	'phone'				=> '8096857135',
	        	'gender'			=> 'Femenino',
	        	'extension'			=> '3008',
	        	'institution_id'	=> '67',
	        	'password'			=> bcrypt('123456'),
	        	'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
	        ],
	        [
	        	'name' 				=> 'Marlen',
	        	'lastname'			=> 'Reynoso Jimenez',
	        	'area'				=> 'Transparencia Gubernamental',
	        	'job_title'			=> 'Auxiliar Administrativo 1',
	        	'email'				=> 'marlene.reynoso@digeig.gob.do',
	        	'phone'				=> '8096857135',
	        	'gender'			=> 'Femenino',
	        	'extension'			=> '3008',
	        	'institution_id'	=> '67',
	        	'password'			=> bcrypt('123456'),
	        	'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
	        ],
	        [
	        	'name' 				=> 'Ana',
	        	'lastname'			=> 'Felix',
	        	'area'				=> 'Transparencia Gubernamental',
	        	'job_title'			=> 'Analista',
	        	'email'				=> 'ana.felix@digeig.gob.do',
	        	'phone'				=> '8096857135',
	        	'gender'			=> 'Femenino',
	        	'extension'			=> '3008',
	        	'institution_id'	=> '67',
	        	'password'			=> bcrypt('123456'),
	        	'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
	        ],
	        [
	        	'name' 				=> 'Dahiri Miguel',
	        	'lastname'			=> 'Espinosa Guerra',
	        	'area'				=> 'División de Tecnología de la Información y la Comunicación',
	        	'job_title'			=> 'Encargado Division Tecn. De la Informacion',
	        	'email'				=> 'dahiri.espinosa@digeig.gob.do',
	        	'phone'				=> '8096857135',
	        	'gender'			=> 'Masculino',
	        	'extension'			=> '3004',
	        	'institution_id'	=> '67',
	        	'password'			=> bcrypt('123456'),
	        	'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
	        ],
			[
	        	'name' 				=> 'Edward Joel',
	        	'lastname'			=> 'Palen Thomas',
	        	'area'				=> 'División de Tecnología de la Información y la Comunicación',
	        	'job_title'			=> 'Programador',
	        	'email'				=> 'edward.palen@digeig.gob.do',
	        	'phone'				=> '8096857135',
	        	'gender'			=> 'Masculino',
	        	'extension'			=> '3004',
	        	'institution_id'	=> '67',
	        	'password'			=> bcrypt('123456'),
	        	'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
	        	'name' 				=> 'Nicol',
	        	'lastname'			=> 'Batista',
	        	'area'				=> 'División de Tecnología de la Información y la Comunicación',
	        	'job_title'			=> 'Programador',
	        	'email'				=> 'nicol.batista@digeig.gob.do',
	        	'phone'				=> '8299244031',
	        	'gender'			=> 'Femenino',
	        	'extension'			=> '3004',
	        	'institution_id'	=> '67',
	        	'password'			=> bcrypt('123456'),
	        	'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
	        ],	        
	        [
	        	'name' 				=> 'Super',
	        	'lastname'			=> 'Admin',
	        	'area'				=> 'División de Tecnología de la Información y la Comunicación',
	        	'job_title'			=> 'Administrador de sistemas',
	        	'email'				=> 'admin@digeig.gob.do',
	        	'phone'				=> '8096857135',
	        	'gender'			=> '',
	        	'extension'			=> '3004',
	        	'institution_id'	=> '67',
	        	'password'			=> bcrypt('123456'),
	        	'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
	        ]
	    );

        Admin::insert($data);
    }
}
