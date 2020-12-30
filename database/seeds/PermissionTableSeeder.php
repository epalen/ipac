<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
        	[
        		'name' => 'role-list',
        		'display_name' => 'Mostrar el listado de roles',
        		'description' => 'Ver solo listado de roles'
        	],
        	[
        		'name' => 'role-create',
        		'display_name' => 'Crear Rol',
        		'description' => 'Crear rol nuevo'
        	],
        	[
        		'name' => 'role-edit',
        		'display_name' => 'Editar Rol',
        		'description' => 'Editar rol'
        	],
        	[
        		'name' => 'role-delete',
        		'display_name' => 'Eliminar Rol',
        		'description' => 'Eliminar Rol'
        	]
        ];

        foreach ($permission as $key => $value) {
        	Permission::create($value);
        }
    }
}
