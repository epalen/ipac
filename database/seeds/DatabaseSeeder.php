<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $this->call(UserTableSeeder::class);        
        $this->call(ProvinceTableSeeder::class);
        $this->call(MunicipalityTableSeeder::class);
        $this->call(DistrictTableSeeder::class);
        $this->call(InstitutionTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(TopicTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}
