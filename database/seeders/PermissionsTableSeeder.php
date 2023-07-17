<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {

        Permission::truncate();
        
        $permissions = [
            ["title" => "setting", "childs" => [
                ["title" => "users", "childs" => [
                    ["title" => "user_create", "childs" => []],
                    ["title" => "user_edit", "childs" => []],
                    ["title" => "user_show", "childs" => []],
                    ["title" => "user_delete", "childs" => []],
                    ["title" => "user_access", "childs" => []],
                    ["title" => "profile_password_edit", "childs" => []],
                ]],
                ["title" => "roles", "childs" => [
                    ["title" => "role_create", "childs" => []],
                    ["title" => "role_edit", "childs" => []],
                    ["title" => "role_show", "childs" => []],
                    ["title" => "role_delete", "childs" => []],
                    ["title" => "role_access", "childs" => []],
                ]],
                ["title" => "processus", "childs" => [
                    ["title" => "modelisation", "childs" => []],
                    ["title" => "categorie", "childs" => []],
                    ["title" => "type_processus", "childs" => []],
                    ["title" => "theme", "childs" => []],
                ]],
                ["title" => "nature_doc", "childs" => [
                    ["title" => "file_type_create", "childs" => []],
                    ["title" => "file_type_edit", "childs" => []],
                    ["title" => "file_type_show", "childs" => []],
                    ["title" => "file_type_delete", "childs" => []],
                    ["title" => "file_type_access", "childs" => []],
                ]],

            ]],
            ["title" => "dashbord", "childs" => []],
            ["title" => "patrimoine", "childs" => [
                ["title" => "site", "childs" => [
                    ["title" => "site_create", "childs" => []],
                    ["title" => "site_edit", "childs" => []],
                    ["title" => "site_show", "childs" => []],
                    ["title" => "site_delete", "childs" => []],
                    ["title" => "site_access", "childs" => []],
                ]],
                ["title" => "terrain", "childs" => [
                    ["title" => "terrain_create", "childs" => []],
                    ["title" => "terrain_edit", "childs" => []],
                    ["title" => "terrain_show", "childs" => []],
                    ["title" => "terrain_delete", "childs" => []],
                    ["title" => "terrain_access", "childs" => []],
                ]],
                ["title" => "batiment", "childs" => [
                    ["title" => "batiment_create", "childs" => []],
                    ["title" => "batiment_edit", "childs" => []],
                    ["title" => "batiment_show", "childs" => []],
                    ["title" => "batiment_delete", "childs" => []],
                    ["title" => "batiment_access", "childs" => []],
                ]],
                ["title" => "etage", "childs" => [
                    ["title" => "etage_create", "childs" => []],
                    ["title" => "etage_edit", "childs" => []],
                    ["title" => "etage_show", "childs" => []],
                    ["title" => "etage_delete", "childs" => []],
                    ["title" => "etage_access", "childs" => []],
                ]],
                ["title" => "local", "childs" => [
                    ["title" => "local_create", "childs" => []],
                    ["title" => "local_edit", "childs" => []],
                    ["title" => "local_show", "childs" => []],
                    ["title" => "local_delete", "childs" => []],
                    ["title" => "local_access", "childs" => []],
                ]],
                ["title" => "equipement", "childs" => [
                    ["title" => "equipement_create", "childs" => []],
                    ["title" => "equipement_edit", "childs" => []],
                    ["title" => "equipement_show", "childs" => []],
                    ["title" => "equipement_delete", "childs" => []],
                    ["title" => "equipement_access", "childs" => []],
                ]],
            ]],
            ["title" => "assinaissement", "childs" => [
                ["title" => "p_cession", "childs" => []],
                ["title" => "p_acquisiyion", "childs" => []],
                ["title" => "p_regularisation", "childs" => []],
            ]],
            ["title" => "locative", "childs" => [
                ["title" => "p_depense", "childs" => []],
                ["title" => "p_recette", "childs" => []],
            ]],
            ["title" => "maintenance", "childs" => [
                ["title" => "preventive", "childs" => [
                    ["title" => "preventive_create", "childs" => []],
                    ["title" => "preventive_edit", "childs" => []],
                    ["title" => "preventive_show", "childs" => []],
                    ["title" => "preventive_delete", "childs" => []],
                    ["title" => "preventive_access", "childs" => []],
                ]],
                ["title" => "corrective", "childs" => [
                    ["title" => "corrective_create", "childs" => []],
                    ["title" => "corrective_edit", "childs" => []],
                    ["title" => "corrective_show", "childs" => []],
                    ["title" => "corrective_delete", "childs" => []],
                    ["title" => "corrective_access", "childs" => []],
                ]],
                ["title" => "marche", "childs" => [
                    ["title" => "marche_create", "childs" => []],
                    ["title" => "marche_edit", "childs" => []],
                    ["title" => "marche_show", "childs" => []],
                    ["title" => "marche_delete", "childs" => []],
                    ["title" => "marche_access", "childs" => []],
                ]],
                ["title" => "prestataire", "childs" => [
                    ["title" => "prestataire_create", "childs" => []],
                    ["title" => "prestataire_edit", "childs" => []],
                    ["title" => "prestataire_show", "childs" => []],
                    ["title" => "prestataire_delete", "childs" => []],
                    ["title" => "prestataire_access", "childs" => []],
                ]],
                ["title" => "rapport", "childs" => [
                    ["title" => "rapport_create", "childs" => []],
                    ["title" => "rapport_edit", "childs" => []],
                    ["title" => "rapport_show", "childs" => []],
                    ["title" => "rapport_delete", "childs" => []],
                    ["title" => "rapport_access", "childs" => []],
                ]],
                ["title" => "setting_maintenance", "childs" => [
                    ["title" => "lot_create", "childs" => []],
                    ["title" => "lot_edit", "childs" => []],
                    ["title" => "lot_delete", "childs" => []],
                    ["title" => "lot_access", "childs" => []],
                    ["title" => "famille_create", "childs" => []],
                    ["title" => "famille_edit", "childs" => []],
                    ["title" => "famille_delete", "childs" => []],
                    ["title" => "famille_access", "childs" => []],
                ]],
            ]],
            ["title" => "transverse", "childs" => [
                ["title" => "ged", "childs" => []],
                ["title" => "armoire", "childs" => [
                    ["title" => "plan", "childs" => [
                        ["title" => "plan_create", "childs" => []],
                        ["title" => "plan_edit", "childs" => []],
                        ["title" => "plan_show", "childs" => []],
                        ["title" => "plan_delete", "childs" => []],
                        ["title" => "plan_access", "childs" => []],
                    ]],
                    ["title" => "projet", "childs" => [
                        ["title" => "projet_create", "childs" => []],
                        ["title" => "projet_edit", "childs" => []],
                        ["title" => "projet_show", "childs" => []],
                        ["title" => "projet_delete", "childs" => []],
                        ["title" => "projet_access", "childs" => []],
                    ]],
                ]],
                ["title" => "geoportail", "childs" => []],
            ]]


        ];

        $this->insert($permissions, null);
    }

    private function insert($permissions, $parent_id)
    {
        foreach ($permissions as $p) {
            $inserted = Permission::create([
                "title" => $p["title"],
                "parent_id" => $parent_id
            ]);
            if (!empty($p["childs"])) {
                $this->insert($p["childs"], $inserted->id);
            }
        }
    }
}
