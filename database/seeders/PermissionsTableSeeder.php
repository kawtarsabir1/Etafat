<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('permissions')->delete();
        
        DB::table('permissions')->insert(
            [
                array("id"=> 1, "name" => "role:creation","guard_name" => "web", "category" => "config","category_id" => "2"),
                array("id"=> 2, "name" => "role:edition",	"guard_name" => "web"	, "category" => "config","category_id" => "2"),
                array("id"=> 3, "name" => "role:suppression",	"guard_name" => "web"	, "category" => "config","category_id" => "2"),
                array("id"=> 4, "name" => "Gestion des roles",	"guard_name" => "web"	, "category" => "interface","category_id" => "2"),
                array("id"=> 5, "name" => "Gestion des couches	","guard_name" => "web"	, "category" => "interface","category_id" => "1"),
                array("id"=> 6, "name" => "couche:import des données",	"guard_name" => "web"	, "category" => "config","category_id" => "2"),
                array("id"=> 7, "name" => "couche:import des couches",	"guard_name" => "web"	, "category" => "config","category_id" => "1"),
                array("id"=> 8, "name" => "Edition","guard_name" => "web"	, "category" => "map","category_id" => "1"),
                array("id"=> 9, "name" => "Recherche","guard_name" => "web"	, "category" => "map","category_id" => "1"),
                array("id"=> 10, "name" => "Mesures","guard_name" => "web"	, "category" => "map","category_id" => "1"),
                array("id"=> 11, "name" => "GoToXY","guard_name" => "web"	, "category" => "map","category_id" => "1"),
                array("id"=> 12, "name" => "Legende","guard_name" => "web"	, "category" => "map","category_id" => "1"),
                array("id"=> 13, "name" => "Impression","guard_name" => "web"	, "category" => "map","category_id" => "1"),
                array("id"=> 14, "name" => "Classification",	"guard_name" => "web"	, "category" => "map","category_id" => "1"),
                array("id"=> 15, "name" => "Classification:Statistiques","guard_name" => "web"	, "category" => "map","category_id" => "1"),
                array("id"=> 16, "name" => "Rapports","guard_name" => "web"	, "category" => "interface","category_id" => "1"),
                array("id"=> 17, "name" => "Gestion des utilisateurs","guard_name" => "web"	, "category" => "interface","category_id" => "2"),
                array("id"=> 18, "name" => "utilisateur:creation","guard_name" => "web"	, "category" => "config","category_id" => "2"),
                array("id"=> 19, "name" => "utilisateur:edition","guard_name" => "web", "category" => "config","category_id" => "2"),
                array("id"=> 20, "name" => "utilisateur:suppression","guard_name" => "web"	, "category" => "config","category_id" => "2"),
                array("id"=> 21, "name" => "couche:creation","guard_name" => "web"	, "category" => "config","category_id" => "2"),
                array("id"=> 22, "name" => "couche:suppression",	"guard_name" => "web"	, "category" => "config","category_id" => "2"),
                array("id"=> 23, "name" => "couche:edition",	"guard_name" => "web"	, "category" => "config","category_id" => "2"),
                array("id"=> 24, "name" => "Gestion des couches","guard_name" => "web"	, "category" => "interface","category_id" => "2"),
                array("id"=> 25, "name" => "odp.createActivite","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 26, "name" => "odp.importActivite","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 27, "name" => "odp.archiveActivite","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 28, "name" => "odp.activiteEdit","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 29, "name" => "odp.activiteDelete","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 30, "name" => "odp.archiveOdp","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 31, "name" => "odp.RedevableEdit","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 32, "name" => "odp.importRedevable","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 33, "name" => "odp.redevableDelete","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 34, "name" => "odp.redevableCreate","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 35, "name" => "odp.genererTaxe","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 36, "name" => "odp.calculeTaxe","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 37, "name" => "odp.ordreRecette","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 38, "name" => "odp.archiveTaxe","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 39, "name" => "odp.avisZip","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 40, "name" => "odp.taxeEdit","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 41, "name" => "odp.taxeDelete","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 42, "name" => "arrete.createParcelle","guard_name" => "web"	, "category" => "arrete","category_id" => "5"),
                array("id"=> 43, "name" => "arrete.importParcelle","guard_name" => "web"	, "category" => "arrete","category_id" => "5"),
                array("id"=> 44, "name" => "arrete.parcelleEdit","guard_name" => "web"	, "category" => "arrete","category_id" => "5"),
                array("id"=> 45, "name" => "arrete.parcelleDelete","guard_name" => "web"	, "category" => "arrete","category_id" => "5"),
                array("id"=> 46, "name" => "arrete.create","guard_name" => "web"	, "category" => "arrete","category_id" => "5"),
                array("id"=> 47, "name" => "arrete.edit","guard_name" => "web"	, "category" => "arrete","category_id" => "5"),
                array("id"=> 48, "name" => "arrete.delete","guard_name" => "web"	, "category" => "arrete","category_id" => "5"),
                array("id"=> 49, "name" => "odp.createOdp","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 50, "name" => "odp.importOdp","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 51, "name" => "odp.editMatiere","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 52, "name" => "odp.deleteMatiere","guard_name" => "web"	, "category" => "opd","category_id" => "3"),
                array("id"=> 53, "name" => "odp.importFichier","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 54, "name" => "odp.editDocument","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 55, "name" => "odp.deletetDocument","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 56, "name" => "odp.createTypeactivite","guard_name" => "web"	, "category" => "parametrage","category_id" => "2"),
                array("id"=> 57, "name" => "odp.createSpecification","guard_name" => "web"	, "category" => "parametrage","category_id" => "2"),
                array("id"=> 58, "name" => "odp.importTypeactivite","guard_name" => "web"	, "category" => "parametrage","category_id" => "2"),
                array("id"=> 59, "name" => "odp.editTypeactivite","guard_name" => "web"	, "category" => "parametrage","category_id" => "2"),
                array("id"=> 60, "name" => "odp.deleteTypeactivite","guard_name" => "web"	, "category" => "parametrage","category_id" => "2"),
                array("id"=> 61, "name" => "odp.createTypematiere","guard_name" => "web"	, "category" => "parametrage","category_id" => "2"),
                array("id"=> 62, "name" => "odp.importTypematiere","guard_name" => "web"	, "category" => "parametrage","category_id" => "2"),
                array("id"=> 63, "name" => "odp.editTypematiere","guard_name" => "web"	, "category" => "parametrage","category_id" => "2"),
                array("id"=> 64, "name" => "odp.deleteTypematiere","guard_name" => "web"	, "category" => "parametrage","category_id" => "2"),
                array("id"=> 65, "name" => "odp.createFormule","guard_name" => "web"	, "category" => "parametrage","category_id" => "2"),
                array("id"=> 66, "name" => "odp.editFormule","guard_name" => "web"	, "category" => "parametrage","category_id" => "2"),
                array("id"=> 67, "name" => "odp.deleteFormule","guard_name" => "web"	, "category" => "parametrage","category_id" => "2"),
                array("id"=> 68, "name" => "odp.editSpecification","guard_name" => "web"	, "category" => "parametrage","category_id" => "2"),
                array("id"=> 69, "name" => "odp.deleteSpecification","guard_name" => "web"	, "category" => "parametrage","category_id" => "2"),
                array("id"=> 70, "name" => "read.activite","guard_name" => "web"	, "category" => "menu","category_id" => "3"),
                array("id"=> 71, "name" => "read.redevable","guard_name" => "web"	, "category" => "menu","category_id" => "3"),
                array("id"=> 72, "name" => "read.taxeodp","guard_name" => "web"	, "category" => "menu","category_id" => "3"),
                array("id"=> 73, "name" => "read.arrete","guard_name" => "web"	, "category" => "menu","category_id" => "5"),
                array("id"=> 74, "name" => "read.parcelle","guard_name" => "web"	, "category" => "menu","category_id" => "5"),
                array("id"=> 75, "name" => "read.plan","guard_name" => "web"	, "category" => "menu","category_id" => "2"),
                array("id"=> 76, "name" => "read.type_activite","guard_name" => "web"	, "category" => "menu","category_id" => "2"),
                array("id"=> 77, "name" => "read.type_matiere","guard_name" => "web"	, "category" => "menu","category_id" => "2"),
                array("id"=> 78, "name" => "read.user","guard_name" => "web"	, "category" => "menu","category_id" => "2"),
                array("id"=> 79, "name" => "read.permissions","guard_name" => "web"	, "category" => "menu","category_id" => "2"),
                array("id"=> 80, "name" => "odp.import_photo","guard_name" => "web"	, "category" => "menu","category_id" => "3"),
                array("id"=> 81, "name" => "tnb.createTnb","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 82, "name" => "tnb.importationMassive","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 83, "name" => "tnb.listeArchive","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 84, "name" => "tnb.afficher","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 85, "name" => "tnb.modifier","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 86, "name" => "tnb.historique","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 87, "name" => "tnb.supprimer","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 88, "name" => "afficher.tnb","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 89, "name" => "afficher.redevableTnb","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 90, "name" => "afficher.taxeTnb","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 91, "name" => "tnb.creerRedevable","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 92, "name" => "tnb.redevableAfficher","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 93, "name" => "tnb.redevableModifier","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 94, "name" => "tnb.redevableSupprimer","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 95, "name" => "tnb.genererTaxe","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 96, "name" => "tnb.calculPenalite","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 97, "name" => "tnb.genererNotif1","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 98, "name" => "tnb.genererNotif2","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 99, "name" => "tnb.genererOrdreDeRecette","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 100, "name" => "tnb.listeArchiveTaxe","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 101, "name" => "tnb.afficherTaxe","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 102, "name" => "tnb.modifierTaxe","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 103, "name" => "tnb.supprimerTaxe","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 104, "name" => "tnb.ajouterDocument","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 105, "name" => "tnb.telechargerDocument","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 106, "name" => "tnb.modifierDocument","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 107, "name" => "tnb.supprimerDocument","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 108, "name" => "tnb.restaurerTNB","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 109, "name" => "tnb.restaurerTaxe","guard_name" => "web"	, "category" => "tnb","category_id" => "4"),
                array("id"=> 110, "name" => "odp.restaurerTaxe","guard_name" => "web"	, "category" => "odp","category_id" => "3"),
                array("id"=> 111, "name" => "afficher.gestionTarifs","guard_name" => "web"	, "category" => "parametrage","category_id" => "2"),
                array("id"=> 112, "name" => "tnb.modifierTarif","guard_name" => "web"	, "category" => "parametrage","category_id" => "2"),
                array("id"=> 113, "name" => "tnb.ajouterTarif","guard_name" => "web"	, "category" => "parametrage","category_id" => "2"),
                ]
                
        );
        
        
    }
}