<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            // SitesTableSeeder::class,
            // PermissionsTableSeeder::class,
            // RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            // TerrainsTableSeeder::class,
            // BatimentsTableSeeder::class,
            // EtagesTableSeeder::class,
            // LocalsTableSeeder::class,

            // RegionTableSeeder::class,
            // ProvinceTableSeeder::class,
            // CommuneTableSeeder::class,

            // SiteGeomTableSeeder::class,

            
        ]);
    }
}
