<?php

use Illuminate\Database\Seeder;
use App\PermissionRole;
use App\RoleAdmin;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
        	[
        		'name' => 'admin',
        		'display_name' => 'Admininistrador',
        		'description' => 'Rol administrador de sistema'
        	],
            [
                'name' => 'manager',
                'display_name' => 'Encargado',
                'description' => 'Rol encargado departamental'
            ],
            [
                'name' => 'institutional_analyst',
                'display_name' => 'Analista DIGEIG',
                'description' => 'Rol analista de sistema de la institución rectora'
            ],
            [
                'name' => 'editor',
                'display_name' => 'Editor de contenido',
                'description' => 'Rol editor de contenido del sistema'
            ],
            [
                'name' => 'analyst_institutions',
                'display_name' => 'Analista institución involucrada',
                'description' => 'Rol analista de sistema de la institución a la que se le asignara la evaluación de una propuesta'
            ]
        ];

        foreach ($role as $key => $value) {
        	Role::create($value);
        }

    	$permissionrole = array(
			[
				'permission_id' 	=> '1',
				'role_id' 			=> '1'
			],
			[
				'permission_id' 	=> '2',
				'role_id' 			=> '1'
			],
			[
				'permission_id' 	=> '3',
				'role_id' 			=> '1'
			],
			[
				'permission_id' 	=> '4',
				'role_id' 			=> '1'
			],
			[
				'permission_id' 	=> '3',
				'role_id' 			=> '2'
			],
			[
				'permission_id' 	=> '4',
				'role_id' 			=> '2'
			],
		);

		$roleadmin = array(
			[
				'user_id' 	=> '1',
				'role_id' 	=> '2'
			],
			[
				'user_id' 	=> '2',
				'role_id' 	=> '2'
			],		
			[
				'user_id' 	=> '3',
				'role_id' 	=> '3'
			],
			[
				'user_id' 	=> '4',
				'role_id' 	=> '3'
			],	
			[
				'user_id' 	=> '5',
				'role_id' 	=> '1'
			],
			[
				'user_id' 	=> '6',
				'role_id' 	=> '1'
			],
			[
				'user_id' 	=> '7',
				'role_id' 	=> '1'
			],
		);

		PermissionRole::insert($permissionrole);

		RoleAdmin::insert($roleadmin);
    }
}
