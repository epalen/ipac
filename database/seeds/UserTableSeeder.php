<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
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
	        	'name' 			=> 'Edward Joel',
	        	'lastname'		=> 'Palen Thomas',	        	
	        	'doc_type'		=> 'Cédula',
	        	'doc_number'	=> '00100252458',
	        	'phone'			=> '8096859878',
	        	'phone_work'	=> '8095856969',
	        	'phone_mobile'	=> '8298669779',
	        	'gender'		=> 'Masculino',
	        	'email'			=> 'edwardpalen@gmail.com',
	        	'password'		=> bcrypt('123456'),
	        	'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
	        ], 
	        [
	        	'name' 			=> 'Juan Carlos',
	        	'lastname'		=> 'Perez Acosta',	        	
	        	'doc_type'		=> 'Cédula',
	        	'doc_number'	=> '00100869462',
	        	'phone'			=> '8096457895',
	        	'phone_work'	=> '8099874562',
	        	'phone_mobile'	=> '8299873212',
	        	'gender'		=> 'Masculino',
	        	'email'			=> 'juanperez@gmail.com',
	        	'password'		=> bcrypt('123456'),
	        	'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
	        ],
	        [
	        	'name' 			=> 'Juliana Maria',
	        	'lastname'		=> 'Acosta Rodriguez',	        	
	        	'doc_type'		=> 'Cédula',
	        	'doc_number'	=> '00100832482',
	        	'phone'			=> '8096857896',
	        	'phone_work'	=> '8099274582',
	        	'phone_mobile'	=> '8299873212',
	        	'gender'		=> 'Femenino',
	        	'email'			=> 'julianaacosta@gmail.com',
	        	'password'		=> bcrypt('123456'),
	        	'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
	        ]
	    );

        User::insert($data);
    }
}
