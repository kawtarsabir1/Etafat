<div class="nav-align-left">
    <ul class="nav nav-tabs nav-left flex-column" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="recette-tab-tab1" data-bs-toggle="tab"
                aria-controls="tabrecetteLeft1" href="#tabrecetteLeft1" role="tab"
                aria-selected="true">
                Convetions
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="recette-tab-tab2" data-bs-toggle="tab"
                aria-controls="tabrecetteLeft2" href="#tabrecetteLeft2" role="tab"
                aria-selected="false">
                Résiliations
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="recette-tab-tab3" data-bs-toggle="tab"
                aria-controls="tabrecetteLeft3" href="#tabrecetteLeft3" role="tab"
                aria-selected="false">
                Préstataire
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="recette-tab-tab4" data-bs-toggle="tab"
                aria-controls="tabrecetteLeft4" href="#tabrecetteLeft4" role="tab"
                aria-selected="false">
                Beneficiaire
            </a>
        </li>
    </ul>
    <div class="tab-content" style="    padding-left: 1.5rem;">
        <div class="tab-pane active" id="tabrecetteLeft1" role="tabpanel"
            aria-labelledby="recette-tab-tab1">
            
            <div class="table-responsive text-nowrap">
                

                <div class="card-datatable text-nowrap">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Avenants</th>
                                <th>Beneficiaire </th>
                                <th>Prestataire </th>
                                <th>n_convention </th>
                                <th>code_mecan</th>
                                <th>activité exercée</th>
                                <th>date_effet_conv</th>
                                <th>date_signature_conv </th>
                                <th>Loyer mensuel actualisé HT</th>
                                <th>TVA</th>
                                <th>Taux de révision</th>
                                <th>Périodicité_révision</th>
                                <th>Formalité_révision</th>
                                <th>Durée conv</th>
                                <th>Échéance de paiement</th>
                                <th>Terme</th>
                                <th>duree_préavis_resiliation_prestataire</th>
                                <th>duree_préavis_resiliation_benef</th>
                                <th>Espace expertisé</th>
 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($site->convention_mades as $convention) 
                                
                            <tr>
                                <td> 
                                    <a href="#" onclick="showDocuments({{$convention->id}},62)" class="btn btn-label-primary btn-icon item-edit">
                                        <i class="text-primary ti ti-folder"></i>
                                    </a>
                                    <a href="#" onclick="showEdit({{$convention->id}},62)" class="btn btn-label-warning btn-icon item-edit">
                                        <i class="text-warning ti ti-pencil"></i>
                                    </a>
                                    <a href="#" onclick="showDelete({{$convention->id}},62)" class="btn btn-label-danger btn-icon item-edit">
                                        <i class="text-danger ti ti-trash-x"></i>
                                    </a> 
                                </td>
                                <td> 
                                    <a href="#" onclick="showList({{$convention->id}},128,'r_169')" class="btn btn-label-primary btn-icon item-edit">
                                        <i class="text-primary ti ti-list-details"></i>
                                    </a>
                                </td>

                                <td>{{$convention->beneficiaire?->c_1362}}</td>
                                <td>{{$convention->prestataire?->c_1345}}</td>
                                <td>{{$convention->c_249}}</td>


                                <td>{{$convention->c_250}}</td>
                                <td>{{$convention->c_248}}</td>
                                <td>{{$convention->c_251}}</td>
                                <td>{{$convention->c_1358}}</td>
                                <td>{{$convention->c_252}}</td>
                                <td>{{$convention->c_253}}</td>
                                <td>{{$convention->c_254}}</td>
                                <td>{{$convention->c_255}}</td>
                                <td>{{$convention->c_256}}</td>
                                <td>{{$convention->c_257}}</td>
                                <td>{{$convention->c_258}}</td>
                                <td>{{$convention->c_259}}</td>
                                <td>{{$convention->c_260}}</td>
                                <td>{{$convention->c_261}}</td>
                                <td>{{$convention->c_262}}</td>

 
                                </tr>
                            @endforeach
                        </tbody>



                    </table>





                </div>
            </div>

        </div>
        <div class="tab-pane" id="tabrecetteLeft2" role="tabpanel"
            aria-labelledby="recette-tab-tab2">
            <div class="table-responsive text-nowrap">
                

                <div class="card-datatable text-nowrap">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th></th>
                                <th>N° Convention</th>
                                <th>objet_demande_resiliation</th>
                                <th>Statut résiliation</th>
                                <th>date_depot_resiliation </th>
                                <th>date_effet_resiliation accordé</th>
                                <th>pv_remise_cles_etabli</th>
                                <th>date_signature_pv_remise_cles</th>
                                <th>date_demande_abb_etablir_pv_etat_lieu_remise_cles </th>
                                <th>date_demande_bam_etablir_pv_etat_lieu_remise_cles </th>
                                <th>actions_entreprises</th>
                                <th>prerequis_résiliation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($site->resiliation_made as $r) 
                                
                            <tr>
                                <td> 
                                    <a href="#" onclick="showDocuments({{$r->id}},131)" class="btn btn-label-primary btn-icon item-edit">
                                        <i class="text-primary ti ti-folder"></i>
                                    </a>
                                    <a href="#" onclick="showEdit({{$r->id}},131)" class="btn btn-label-warning btn-icon item-edit">
                                        <i class="text-warning ti ti-pencil"></i>
                                    </a>
                                    <a href="#" onclick="showDelete({{$r->id}},131)" class="btn btn-label-danger btn-icon item-edit">
                                        <i class="text-danger ti ti-trash-x"></i>
                                    </a> 
                                </td>
                                <td>{{$r->convention?->c_249}}</td>
                                <td>{{$r->c_1382}}</td>
                                <td>{{$r->c_1383}}</td>
                                <td>{{$r->c_1384}}</td>
                                <td>{{$r->c_1385}}</td>
                                <td>{{$r->c_1386}}</td>
                                <td>{{$r->c_1387}}</td>
                                <td>{{$r->c_1388}}</td>
                                <td>{{$r->c_1389}}</td>
                                <td>{{$r->c_1390}}</td>

 
                                </tr>
                            @endforeach
                        </tbody>



                    </table>





                </div>
            </div>
            
        </div>
        <div class="tab-pane" id="tabrecetteLeft3" role="tabpanel"
            aria-labelledby="recette-tab-tab4">
            <div class="table-responsive text-nowrap">
                

                {{-- <div class="card-datatable text-nowrap"> --}}
                    {{-- <table class="table datatable"> --}}
                        <x-Presentation.dataCard :items="[
                                'Prestataire' => $site->convention_mades->first()?->prestataire?->c_1344,
                                'ICE Prestataire' => $site->convention_mades->first()?->prestataire?->c_1345,
                                'Election domicile Prestataire' => $site->convention_mades->first()?->prestataire?->c_1346,
                                'capital social Prestataire' => $site->convention_mades->first()?->prestataire?->c_1347,
                                'numéro de registre de commerce Prestataire' => $site->convention_mades->first()?->prestataire?->c_1348,
                                'Titre de civilité du représentant du Prestataire' => $site->convention_mades->first()?->prestataire?->c_1349,
                                'nom du représentant du Prestataire' => $site->convention_mades->first()?->prestataire?->c_1350,
                                'qualité du représentant du Prestataire' => $site->convention_mades->first()?->prestataire?->c_1351,
                        ]"></x-Presentation.dataCard>
{{-- 
                        <thead>
                            <tr>
                                'Prestataire	' => $site->convention_mades->first()?->prestataire?->c_1344,
                                'ICE Prestataire' => $site->convention_mades->first()?->prestataire?->c_1345,
                                'Election domicile Prestataire' => $site->convention_mades->first()?->prestataire?->c_1346,
                                'capital social Prestataire' => $site->convention_mades->first()?->prestataire?->c_1347,
                                'numéro de registre de commerce Prestataire' => $site->convention_mades->first()?->prestataire?->c_1348,
                                'Titre de civilité du représentant du Prestataire' => $site->convention_mades->first()?->prestataire?->c_1349,
                                'nom du représentant du Prestataire' => $site->convention_mades->first()?->prestataire?->c_1350,
                                'qualité du représentant du Prestataire' => $site->convention_mades->first()?->prestataire?->c_1351,
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$site->convention_mades->first()?->prestataire?->c_1344}}</td>
                                <td>{{$site->convention_mades->first()?->prestataire?->c_1345}}</td>
                                <td>{{$site->convention_mades->first()?->prestataire?->c_1346}}</td>
                                <td>{{$site->convention_mades->first()?->prestataire?->c_1347}}</td>
                                <td>{{$site->convention_mades->first()?->prestataire?->c_1348}}</td>
                                <td>{{$site->convention_mades->first()?->prestataire?->c_1349}}</td>
                                <td>{{$site->convention_mades->first()?->prestataire?->c_1350}}</td>
                                <td>{{$site->convention_mades->first()?->prestataire?->c_1351}}</td> 
                            </tr>
                        </tbody>
                    </table> --}}
                {{-- </div> --}}


            </div>
            
        </div>
        <div class="tab-pane" id="tabrecetteLeft4" role="tabpanel"
        aria-labelledby="recette-tab-tab4">

        <x-Presentation.dataCard :items="[
'Bénéficiaire' => $site->convention_mades->first()?->beneficiaire?->c_1360,
                            'Code client' => $site->convention_mades->first()?->beneficiaire?->c_1361,
                            'ICE Bénéficiaire' => $site->convention_mades->first()?->beneficiaire?->c_1362,
                            'Election domicile Bénéficiaire' => $site->convention_mades->first()?->beneficiaire?->c_1363,
                            'capital social Bénéficiaire' => $site->convention_mades->first()?->beneficiaire?->c_1364,
                            'numéro de registre de commerce Bénéficiaire' => $site->convention_mades->first()?->beneficiaire?->c_1365,
                            'Titre de civilité du représentant du Bénéficiaire' => $site->convention_mades->first()?->beneficiaire?->c_1367,
                            'nom du représentant du Bénéficiaire' => $site->convention_mades->first()?->beneficiaire?->c_1368,
                            'qualité du représentant du Bénéficiaire' => $site->convention_mades->first()?->beneficiaire?->c_1366,
    ]"></x-Presentation.dataCard>

        {{-- <div class="table-responsive text-nowrap">
            

            <div class="card-datatable text-nowrap">
                <table class="table datatable">
                    <thead>
                        <tr>
                            
                        </tr>
                    </thead>
                    <tbody>                            
                        <tr>
                            <td>{{$site->convention_mades->first()?->beneficiaire?->c_1360}}</td>
                            <td>{{$site->convention_mades->first()?->beneficiaire?->c_1361}}</td>
                            <td>{{$site->convention_mades->first()?->beneficiaire?->c_1362}}</td>
                            <td>{{$site->convention_mades->first()?->beneficiaire?->c_1363}}</td>
                            <td>{{$site->convention_mades->first()?->beneficiaire?->c_1364}}</td>
                            <td>{{$site->convention_mades->first()?->beneficiaire?->c_1365}}</td> 
                            <td>{{$site->convention_mades->first()?->beneficiaire?->c_1367}}</td>
                            <td>{{$site->convention_mades->first()?->beneficiaire?->c_1368}}</td>
                            <td>{{$site->convention_mades->first()?->beneficiaire?->c_1366}}</td> 
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div> --}}
        
    </div>
    </div>
</div>
