<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        
        DB::table('categories')->insert(
            [
                array("id"=> 1, "nom" => "Carte"),
                array("id"=> 2, "nom" => "Paramétrages"),
                array("id"=> 3, "nom" => "Odp"),
                array("id"=> 4, "nom" => "TNB"),
                array("id"=> 5, "nom" => "Arrêté"),      
                 ]
                
        );
    }
}
