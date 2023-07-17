<div class="nav-align-left">
    <ul class="nav nav-tabs nav-left flex-column" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="depense-tab-tab1" data-bs-toggle="tab"
                aria-controls="tabdepenseLeft1" href="#tabdepenseLeft1" role="tab"
                aria-selected="true">
                Contrats
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="depense-tab-tab2" data-bs-toggle="tab"
                aria-controls="tabdepenseLeft2" href="#tabdepenseLeft2" role="tab"
                aria-selected="false">
                Bailleur
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" id="depense-tab-tab3" data-bs-toggle="tab"
                aria-controls="tabdepenseLeft-2-3" href="#tabdepenseLeft-2-3" role="tab"
                aria-selected="false">
                Bailleur Inital
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="depense-tab-tab4" data-bs-toggle="tab"
                aria-controls="tabdepenseLeft-2-4" href="#tabdepenseLeft-2-4"
                role="tab" aria-selected="false">
                Héritiers ou bénificiare
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="depense-tab-tab5" data-bs-toggle="tab"
                aria-controls="tabdepenseLeft-2-5" href="#tabdepenseLeft-2-5"
                role="tab" aria-selected="false">
                TSC
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="depense-tab-tab6" data-bs-toggle="tab"
                aria-controls="tabdepenseLeft-2-6" href="#tabdepenseLeft-2-6"
                role="tab" aria-selected="false">
                Fiscalité
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="depense-tab-tab7" data-bs-toggle="tab"
                aria-controls="tabdepenseLeft-2-7" href="#tabdepenseLeft-2-7"
                role="tab" aria-selected="false">
                Paiement
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="depense-tab-tab8" data-bs-toggle="tab"
                aria-controls="tabdepenseLeft-2-8" href="#tabdepenseLeft-2-8"
                role="tab" aria-selected="false">
                Engagement
            </a>
        </li>

    </ul>
    <div class="tab-content" style="    padding-left: 1.5rem;">
        <div class="tab-pane active" id="tabdepenseLeft1" role="tabpanel"
            aria-labelledby="depense-tab-tab1">
            
            <div class="table-responsive text-nowrap">
                <table class="table datatable">
                    <thead>
                        <tr class="text-nowrap">

                            <th></th>
                            <th>Avenants</th>

                            <th>location_centrale_régionale</th>
                            <th>Activité_Exercée_contrat	</th>
                            <th>"N° du contrat"	</th>
                            <th>loyer initial en dh HT	</th>
                            <th>Loyer initial en DH TTC	</th>
                            <th>Détail du loyer initial 	</th>
                            <th>Imposition du bénéficiaire du loyer à l'impôt revenu locatif</th>
                            <th>Justif de non imposition IRF</th>
                            <th>récépissé de dépôt de la demande d'option au paiement spontané IRF</th>
                            <th>Taux d'imposition du revenu locatif</th>
                            <th>Montant de l'impôt retenu à la source</th>
                            <th>Date du contrat</th>
                            <th>Date d'effet bail</th>
                            <th>Location permanente ou durée limitée</th>
                            <th>Durée de contrat en année</th>
                            <th>Reconduction bail</th>
                            <th>Durée préavis de résiliation BAM</th>
                            <th>Durée_ferme bail</th>
                            <th>Terme</th>
                            <th>Autres Conditions de résiliation du contrat</th>
                            <th>TSC integrée dans le loyer ou  non</th>
                            <th>TSC remboursable par BAM</th>
                            <th>PV Etat des lieux dans le contrat</th>
                            <th>TVA</th>
                            <th>Taux charges communes</th>
                            <th>Charges communes</th>
                            <th>autres charges locatives</th>
                            <th>Révision automatique</th>
                            <th>Taux de révision auto</th>
                            <th>fomalité_révision_auto</th>
                            <th>autre-cond_Révision Loyer</th>
                            <th>Autorisation de sous location</th>
                            <th>Autorisation de cession</th>
 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($site->contrats as $contrat)
                                <tr>
                                    <td> 
                                        <a href="#" onclick="showDocuments({{$contrat->id}},119)" class="btn btn-label-primary btn-icon item-edit">
                                            <i class="text-primary ti ti-folder"></i>
                                        </a>
                                        <a href="#" onclick="showEdit({{$contrat->id}},119)" class="btn btn-label-warning btn-icon item-edit">
                                            <i class="text-warning ti ti-pencil"></i>
                                        </a>
                                        <a href="#" onclick="showDelete({{$contrat->id}},119)" class="btn btn-label-danger btn-icon item-edit">
                                            <i class="text-danger ti ti-trash-x"></i>
                                        </a> 
                                    </td>
                                    <td> 
                                        <a href="#" onclick="showList({{$contrat->id}},120,'r_143')" class="btn btn-label-primary btn-icon item-edit">
                                            <i class="text-primary ti ti-list-details"></i>
                                        </a>
                                    </td>
                                    <td>{{$contrat->c_1253}}</td>
                                    <td>{{$contrat->c_1254}}</td>
                                    <td>{{$contrat->c_1252}}</td>
                                    <td>{{$contrat->c_1255}}</td>
                                    <td>{{$contrat->c_1256}}</td>
                                    <td>{{$contrat->c_1287}}</td>
                                    <td>{{$contrat->c_1257}}</td>
                                    <td>{{$contrat->c_1258}}</td>
                                    <td>{{$contrat->c_1259}}</td>
                                    <td>{{$contrat->c_1260}}</td>
                                    <td>{{$contrat->c_1261}}</td>
                                    <td>{{$contrat->c_1262}}</td>
                                    <td>{{$contrat->c_1263}}</td>
                                    <td>{{$contrat->c_1264}}</td>
                                    <td>{{$contrat->c_1265}}</td>
                                    <td>{{$contrat->c_1266}}</td>
                                    <td>{{$contrat->c_1267}}</td>
                                    <td>{{$contrat->c_1268}}</td>
                                    <td>{{$contrat->c_1269}}</td>
                                    <td>{{$contrat->c_1270}}</td>
                                    <td>{{$contrat->c_1271}}</td>
                                    <td>{{$contrat->c_1272}}</td>
                                    <td>{{$contrat->c_1273}}</td>
                                    <td>{{$contrat->c_1274}}</td>
                                    <td>{{$contrat->c_1275}}</td>
                                    <td>{{$contrat->c_1276}}</td>
                                    <td>{{$contrat->c_1277}}</td>
                                    <td>{{$contrat->c_1278}}</td>
                                    <td>{{$contrat->c_1279}}</td>
                                    <td>{{$contrat->c_1280}}</td>
                                    <td>{{$contrat->c_1286}}</td>
                                    <td>{{$contrat->c_1281}}</td>
                                    <td>{{$contrat->c_1282}}</td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <div class="tab-pane" id="tabdepenseLeft2" role="tabpanel"
            aria-labelledby="depense-tab-tab2">
            <div class="table-responsive text-nowrap">
            <table class="table datatable">
                <thead>
                    <tr class="text-nowrap">
                        <th></th>
                        <th>Bailleur actuel ou mandataire</th>
                        <th>Election domicile bailleur actuel</th>
                        <th>Titre de civilité du Bailleur actuel</th>
                        <th>Statut bailleur actuel</th>
                        <th>Téléphone du bailleur actuel</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($site->bailleurs as $bailleur)
                        <tr>
                            <td> 
                                <a href="#" onclick="showEdit({{$bailleur->id}},20)" class="btn btn-label-warning btn-icon item-edit">
                                    <i class="text-warning ti ti-pencil"></i>
                                </a>
                                <a href="#" onclick="showDelete({{$bailleur->id}},20)" class="btn btn-label-danger btn-icon item-edit">
                                    <i class="text-danger ti ti-trash-x"></i>
                                </a> 
                            </td>
                            <td>{{$bailleur->c_82}}</td>
                            <td>{{$bailleur->adresse}}</td>
                            <td>{{$bailleur->civilite}}</td>
                            <td>{{$bailleur->c_1239}}</td> 
                            <td>{{$bailleur->telephone}}</td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            
        </div>

        <div class="tab-pane" id="tabdepenseLeft-2-3" role="tabpanel" aria-labelledby="depense-tab-tab3">
            
            <div class="table-responsive text-nowrap">
            <table class="table datatable">
                <thead>
                    <tr class="text-nowrap">
                        <th></th>
                        <th>Bailleur Initial</th>
                        <th>Statut bailleur initial</th>
                        <th>Election domicile bailleur intial</th>
                        <th>Téléphone du bailleur initial</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($site->bailleur_initials as $bailleuri)
                    <tr>
                        <td> 
                            <a href="#" onclick="showEdit({{$bailleuri->id}},117)" class="btn btn-label-warning btn-icon item-edit">
                                <i class="text-warning ti ti-pencil"></i>
                            </a>
                            <a href="#" onclick="showDelete({{$bailleuri->id}},117)" class="btn btn-label-danger btn-icon item-edit">
                                <i class="text-danger ti ti-trash-x"></i>
                            </a> 
                        </td>
                        <td>{{$bailleuri->c_1241}}</td>
                        <td>{{$bailleuri->c_1243}}</td>
                        <td>{{$bailleuri->c_1244}}</td>
                        <td>{{$bailleuri->c_1245}}</td> 
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        <div class="tab-pane" id="tabdepenseLeft-2-4" role="tabpanel"
            aria-labelledby="depense-tab-tab2">
            <div class="table-responsive text-nowrap">
            <table class="table datatable">
                <thead>
                    <tr class="text-nowrap">
                        <th></th>
                        <th>Bailleur actuel ou mandataire</th>
                        <th>Bénéficiare du loyer</th>
                        <th>Statut Bénéficiare du loyer</th>
                        <th> RIB</th>
                        <th>Banque</th>
                        <th>CIN</th>
                        <th>Mandataire</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($site->heritiers as $heritier)
                        <tr>
                            <td> 
                                <a href="#" onclick="showDocuments({{$heritier->id}},12)" class="btn btn-label-primary btn-icon item-edit">
                                    <i class="text-primary ti ti-folder"></i>
                                </a>
                                <a href="#" onclick="showEdit({{$heritier->id}},12)" class="btn btn-label-warning btn-icon item-edit">
                                    <i class="text-warning ti ti-pencil"></i>
                                </a>
                                <a href="#" onclick="showDelete({{$heritier->id}},12)" class="btn btn-label-danger btn-icon item-edit">
                                    <i class="text-danger ti ti-trash-x"></i>
                                </a> 
                            </td>
                            <td></td>
                            <td>{{$heritier->c_33}}</td>
                            <td>{{$heritier->c_1240}}</td>
                            <td>{{$heritier->c_37}}</td>
                            <td>{{$heritier->c_36}}</td>
                            <td>{{$heritier->c_34}}</td>
                            <td>{{$heritier->c_1236}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        <div class="tab-pane" id="tabdepenseLeft-2-5" role="tabpanel"
            aria-labelledby="depense-tab-tab3">
            <div class="table-responsive text-nowrap">
            <table class="table datatable">
                <thead>
                    <tr class="text-nowrap">
                        <th></th>
                        <th>Années TSC</th>
                        <th>CIN</th>
                        <th>IF</th>
                        <th>Bénéficiare du loyer</th>
                        <th>N° Article de la TSC </th>
                        <th>Montant de la TSC calculé automatiquement"</th>
                        <th>Budget TSC </th>
                        <th>Engagement TSC </th>
                        <th>Engagement SUP TSC </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($site->tsc_depense as $tsc)
                        <tr>
                            <td> 
                                {{-- <a href="#" onclick="showDocuments({{$tsc->id}},122)" class="btn btn-label-primary btn-icon item-edit">
                                    <i class="text-primary ti ti-folder"></i>
                                </a> --}}
                                <a href="#" onclick="showEdit({{$tsc->id}},122)" class="btn btn-label-warning btn-icon item-edit">
                                    <i class="text-warning ti ti-pencil"></i>
                                </a>
                                <a href="#" onclick="showDelete({{$tsc->id}},122)" class="btn btn-label-danger btn-icon item-edit">
                                    <i class="text-danger ti ti-trash-x"></i>
                                </a> 
                            </td>
                            <td> 
                                <a href="#" onclick="showList({{$tsc->id}},123,'r_151')" class="btn btn-label-primary btn-icon item-edit">
                                    <i class="text-primary ti ti-list-details"></i>
                                </a>
                            </td>

                            <td>{{$tsc->c_1397}}</td>
                            <td>{{$tsc->c_1398}}</td>
                            <td>{{$tsc->c_1399}}</td>
                            <td>{{$tsc->c_1296}}</td>
                            <td>{{$tsc->c_1297}}</td>
                            <td>{{$tsc->c_1298}}</td>
                            <td>{{$tsc->c_1299}}</td>
                            <td>{{$tsc->c_1310}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
        <div class="tab-pane" id="tabdepenseLeft-2-6" role="tabpanel"
            aria-labelledby="depense-tab-tab6">
            <x-Presentation.dataCard :items="[
                'Type du bien ' => $site->type_bien]"></x-Presentation.dataCard>
        </div>
        <div class="tab-pane" id="tabdepenseLeft-2-7" role="tabpanel"
            aria-labelledby="depense-tab-tab7">
            <div class="table-responsive text-nowrap">
            <table class="table datatable">
                <thead>
                    <tr class="text-nowrap">
                        <th></th>
                        <th>Nom et Prénom du bénéficiaire du loyer </th>
                        <th>n°du contrat</th>
                        <th>Date d'effet bail</th>
                        <th>Type de virement</th>
                        <th>Nom Etat de paiement</th>
                        <th>Entités Bénéficiaires</th>
                        <th>Échéance</th>
                        <th>Entité supportant le budget</th>
                        <th>Banque</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($site->etat_paiement as $etat)
                        <tr>
                            <td> 
                                {{-- <a href="#" onclick="showDocuments({{$tsc->id}},122)" class="btn btn-label-primary btn-icon item-edit">
                                    <i class="text-primary ti ti-folder"></i>
                                </a> --}}
                                <a href="#" onclick="showEdit({{$etat->id}},121)" class="btn btn-label-warning btn-icon item-edit">
                                    <i class="text-warning ti ti-pencil"></i>
                                </a>
                                <a href="#" onclick="showDelete({{$etat->id}},121)" class="btn btn-label-danger btn-icon item-edit">
                                    <i class="text-danger ti ti-trash-x"></i>
                                </a> 
                            </td>

                            <td>{{$etat->c_1400}}</td>
                            <td>{{$etat->c_1401}}</td>
                            <td>{{$etat->c_1402}}</td>
                            <td>{{$etat->c_1288}}</td>
                            <td>{{$etat->c_1289}}</td>
                            <td>{{$etat->c_1290}}</td>
                            <td>{{$etat->c_1294}}</td>
                            <td>{{$etat->c_1292}}</td>
                            <td>{{$etat->c_1295}}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        <div class="tab-pane" id="tabdepenseLeft-2-8" role="tabpanel"
            aria-labelledby="depense-tab-tab8">
            <div class="table-responsive text-nowrap">
            <table class="table datatable">
                <thead>
                    <tr class="text-nowrap">
                        <th></th>
                        <th>"N° du contrat"</th>
                        <th>CIN</th>
                        <th>IF</th>
                        <th>Bénéficiare du loyer</th>
                        <th>Nombre échéance à engager</th>
                        <th>Loyer mois janvier</th>
                        <th>Charges Communes</th>
                        <th>TVA mensuelle</th>
                        <th>TSC mensuelle</th>
                        <th>Loyer annuel HT </th>
                        <th>"TVA annuelle "</th>
                        <th>"TSC annuelle"</th>
                        <th>Redevance Annuelle hors TVA </th>
                        <th>Redevance Annuelle TTC </th>
                        <th>Total charge locative engagée 2022</th>
                        <th>"Engagement sup Révision"</th>
                        <th>"Engagement sup TSC"</th>
                        <th>Engagement sup Charges communes</th>
                        <th>"Objet Engagement sup autre charges Autre"</th>
                        <th>"objet Engagement sup Autre"</th>
                        <th>Reste à payer Charges communes</th>
                        <th>Reste à payer TSC</th>
                        <th>Objet reste à payer TSC</th>
                        <th>Reste à payer loyer</th>
                        <th>Objet reste à payer loyer</th>
                        <th>Entité supportant le budget</th>
                        <th>ARRIERES charges communes</th>
                        <th>ARRIERES LOYERS	ARRIERES TSC</th>
                        <th>"Révision du Loyer(une échéance)"	</th>
                        <th>ChargesCommunes annuelles</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($site->engagements as $engagement)
                    <tr>
                        <td> 
                            {{-- <a href="#" onclick="showDocuments({{$tsc->id}},122)" class="btn btn-label-primary btn-icon item-edit">
                                <i class="text-primary ti ti-folder"></i>
                            </a> --}}
                            <a href="#" onclick="showEdit({{$engagement->id}},125)" class="btn btn-label-warning btn-icon item-edit">
                                <i class="text-warning ti ti-pencil"></i>
                            </a>
                            <a href="#" onclick="showDelete({{$engagement->id}},125)" class="btn btn-label-danger btn-icon item-edit">
                                <i class="text-danger ti ti-trash-x"></i>
                            </a> 
                        </td>

                        <td>{{$engagement->c_1403}}</td>
                        <td>{{$engagement->c_1404}}</td>
                        <td>{{$engagement->c_1405}}</td>
                        <td>{{$engagement->c_1406}}</td>
                        <td>{{$engagement->c_1317}}</td>
                        <td>{{$engagement->c_1318}}</td>
                        <td>{{$engagement->c_1319}}</td>
                        <td>{{$engagement->c_1320}}</td>
                        <td>{{$engagement->c_1321}}</td>
                        <td>{{$engagement->c_1322}}</td>
                        <td>{{$engagement->c_1323}}</td>
                        <td>{{$engagement->c_1324}}</td>
                        <td>{{$engagement->c_1325}}</td>
                        <td>{{$engagement->c_1326}}</td>
                        <td>{{$engagement->c_1327}}</td>
                        <td>{{$engagement->c_1328}}</td>
                        <td>{{$engagement->c_1329}}</td>
                        <td>{{$engagement->c_1331}}</td>
                        <td>{{$engagement->c_1332}}</td>
                        <td>{{$engagement->c_1333}}</td>
                        <td>{{$engagement->c_1334}}</td>
                        <td>{{$engagement->c_1335}}</td>
                        <td>{{$engagement->c_1338}}</td>
                        <td>{{$engagement->c_1336}}</td>
                        <td>{{$engagement->c_1337}}</td>
                        <td>{{$engagement->c_1339}}</td>
                        <td>{{$engagement->c_1340}}</td>
                        <td>{{$engagement->c_1341}}</td>
                        <td>{{$engagement->c_1342}}</td>
                        <td>{{$engagement->c_1343}}</td>


                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
