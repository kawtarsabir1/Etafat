<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ModelHasPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('model_has_permissions')->delete();
        
        
        
    }
}