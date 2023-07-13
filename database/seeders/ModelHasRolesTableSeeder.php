<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ModelHasRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('model_has_roles')->delete();
        
        DB::table('model_has_roles')->insert(array (
            0 => 
            array (
                'role_id' => 1,
                'model_type' => 'App\\User',
                'user_id' => 1,
            ),
        ));
        
        
    }
}