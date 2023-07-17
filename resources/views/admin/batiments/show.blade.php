@extends('layouts/contentLayoutMaster')

@section('vendor-style')
@endsection


@section('content')
    <x-PageHeader :header="\App\Http\Headers\BatimentHeader::show($batiment)"></x-PageHeader>

    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">



                    <div class="nav-vertical">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="vertical-tab-tab1" data-bs-toggle="tab"
                                    aria-controls="tabVerticalLeft1" href="#tabVerticalLeft1" role="tab"
                                    aria-selected="true">
                                    Données Générales
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vertical-tab-tab2" data-bs-toggle="tab"
                                    aria-controls="tabVerticalLeft2" href="#tabVerticalLeft2" role="tab"
                                    aria-selected="false">
                                    Données Techniques
                                </a>
                            </li>


                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabVerticalLeft1" role="tabpanel"
                                aria-labelledby="vertical-tab-tab1">
                                <x-Presentation.dataCard :items="[
                                    'models.batiment.fields.id' => $batiment->id,
                                    'models.batiment.fields.code' => $batiment->code,
                                    'models.batiment.fields.denomination' => $batiment->denomination,
                                    'models.batiment.fields.proprietaire' => $batiment->proprietaire,
                                    'models.batiment.fields.bailleur' => $batiment->bailleur,
                                    'models.batiment.fields.monument_historique' => $batiment->monument_historique,
                                    'models.batiment.fields.categorie_batiment' => $batiment->categorie_batiment,
                                    'models.batiment.fields.type_construction' => $batiment->type_construction,
                                    'models.batiment.fields.statut_juridique' => $batiment->statut_juridique,
                                    'models.batiment.fields.statut_propriete' => $batiment->statut_propriete,
                                    'models.batiment.fields.taxe' => $batiment->taxe,
                                
                                    'models.site.title_singular' => [
                                        'type' => 'preview',
                                        'route' => 'admin.sites.show',
                                        'id' => $batiment->site?->id,
                                        'data' => $batiment->site?->denomination,
                                    ],
                                    'models.terrain.title_singular' => [
                                        'type' => 'preview',
                                        'route' => 'admin.terrains.show',
                                        'id' => $batiment->terrain?->id,
                                        'data' => $batiment->terrain?->denomination,
                                    ],
                                ]"></x-Presentation.dataCard>
                            </div>
                            <div class="tab-pane" id="tabVerticalLeft2" role="tabpanel" aria-labelledby="vertical-tab-tab2">
                                <x-Presentation.dataCard :items="[
                                    'models.batiment.fields.niveaux_autorise' => $batiment->niveaux_autorise,
                                    'models.batiment.fields.niveaux_construit' => $batiment->niveaux_construit,
                                    'models.batiment.fields.niveaux_dessus_sol' => $batiment->niveaux_dessus_sol,
                                    'models.batiment.fields.niveaux_dessous_sol' => $batiment->niveaux_dessous_sol,
                                    'models.batiment.fields.date_service' => $batiment->date_service,
                                    'models.batiment.fields.nombre_accees' => $batiment->nombre_accees,
                                    'models.batiment.fields.etat_accessibilite' => $batiment->etat_accessibilite,
                                    'models.batiment.fields.superficie_plancher' => $batiment->superficie_plancher,
                                    'models.batiment.fields.sub' => $batiment->sub,
                                    'models.batiment.fields.superficie_terrain' => $batiment->superficie_terrain,
                                    'models.batiment.fields.sub' => $batiment->sub,
                                    'models.batiment.fields.sun' => $batiment->sun,
                                    'models.batiment.fields.shob' => $batiment->shob,
                                    'models.batiment.fields.shon' => $batiment->shon,
                                    'models.batiment.fields.superficie_louee' => $batiment->superficie_louee,
                                    'models.batiment.fields.hauteur' => $batiment->hauteur,
                                    'models.batiment.fields.carnet_sante' => $batiment->carnet_sante,
                                ]"></x-Presentation.dataCard>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="etage-tab" data-bs-toggle="tab" href="#etage"
                                aria-controls="etage" role="tab" aria-selected="false">Etages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="local-tab" data-bs-toggle="tab" href="#local" aria-controls="local"
                                role="tab" aria-selected="false">Locaux</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="etage" aria-labelledby="etage-tab" role="tabpanel">
                            <x-presentation.table :columns="['niveau']" :items="$batiment->etages" route="admin.etages">
                            </x-presentation.table>
                        </div>
                        <div class="tab-pane" id="local" aria-labelledby="local-tab" role="tabpanel">
                            <x-presentation.table :columns="['type', 'niveau']" :items="$batiment->locals" route="admin.locals">
                            </x-presentation.table>
                        </div>
                    </div>
                </div>



            </div>
        </div>


    </div>

    <div class="row mt-3    ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="nav-align-left nav-tabs-shadow mb-4">
                        <ul class="nav nav-tabs nav-left flex-column" role="tablist">
                            <li class="nav-item ">
                                <a class="nav-link active" id="vertical-tab2-tab3" data-bs-toggle="tab"
                                    aria-controls="tabVerticalLeft-2-3" href="#tabVerticalLeft-2-3" role="tab"
                                    aria-selected="false">
                                    Projets immobiliers
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vertical-tab2-tab4" data-bs-toggle="tab"
                                    aria-controls="tabVerticalLeft-2-4" href="#tabVerticalLeft-2-4" role="tab"
                                    aria-selected="false">
                                    Données Financieres
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vertical-tab2-tab5" data-bs-toggle="tab"
                                    aria-controls="tabVerticalLeft-2-5" href="#tabVerticalLeft-2-5" role="tab"
                                    aria-selected="false">
                                    Données Location en Dépenses
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vertical-tab2-tab6" data-bs-toggle="tab"
                                    aria-controls="tabVerticalLeft-2-6" href="#tabVerticalLeft-2-6" role="tab"
                                    aria-selected="false">
                                    Données sous location
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vertical-tab2-tab7" data-bs-toggle="tab"
                                    aria-controls="tabVerticalLeft-2-7" href="#tabVerticalLeft-2-7" role="tab"
                                    aria-selected="false">
                                    Afféctation
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vertical-tab2-tab8" data-bs-toggle="tab"
                                    aria-controls="tabVerticalLeft-2-8" href="#tabVerticalLeft-2-8" role="tab"
                                    aria-selected="false">
                                    Données Location recette
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vertical-tab2-tab9" data-bs-toggle="tab"
                                    aria-controls="tabVerticalLeft-2-9" href="#tabVerticalLeft-2-9" role="tab"
                                    aria-selected="false">
                                    Données Assainissement
                                </a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabVerticalLeft-2-3" role="tabpanel" aria-labelledby="vertical-tab2-tab3">
                                <div class="table-responsive">

                                
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>@lang('armoire::models.projet.fields.etat')</th>
                                            <th>@lang('armoire::models.projet.fields.type_travaux')</th>
                                            <th>@lang('armoire::models.projet.fields.numero_marche')</th>
                                            <th>@lang('armoire::models.projet.fields.annee_realisation')</th>
                                            <th>@lang('armoire::models.projet.fields.version')</th>
                                            <th>@lang('armoire::models.projet.fields.date_retrait')</th>
                                            <th>@lang('armoire::models.projet.fields.delai_travaux')</th>
                                            <th>@lang('armoire::models.projet.fields.date_reception_provisoire')</th>
                                            <th>@lang('armoire::models.projet.fields.date_reception_definitive')</th>
                                            <th>@lang('armoire::models.projet.fields.montant_ht')</th>
                                            <th>@lang('armoire::models.projet.fields.bet_nom')</th>
                                            <th>@lang('armoire::models.projet.fields.bet_numero')</th>
                                            <th>@lang('armoire::models.projet.fields.archi_nom')</th>
                                            <th>@lang('armoire::models.projet.fields.archi_numero')</th>
                                            <th>@lang('armoire::models.projet.fields.commentaire')</th>
                                            <th>@lang('armoire::models.projet.fields.bct_nom')</th>
                                            <th>@lang('armoire::models.projet.fields.bct_numero')</th>
                                            <th>@lang('armoire::models.projet.fields.lab_nom')</th>
                                            <th>@lang('armoire::models.projet.fields.lab_numero')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($batiment->projets as $projet)
                                            <tr>
                                                <td>{{$projet->etat}}</td>
                                                <td>{{$projet->type_travaux}}</td>
                                                <td>{{$projet->numero_marche}}</td>
                                                <td>{{$projet->annee_realisation}}</td>
                                                <td>{{$projet->version}}</td>
                                                <td>{{$projet->date_retrait}}</td>
                                                <td>{{$projet->delai_travaux}}</td>
                                                <td>{{$projet->date_reception_provisoire}}</td>
                                                <td>{{$projet->date_reception_definitive}}</td>
                                                <td>{{$projet->montant_ht}}</td>
                                                <td>{{$projet->bet_nom}}</td>
                                                <td>{{$projet->bet_numero}}</td>
                                                <td>{{$projet->archi_nom}}</td>
                                                <td>{{$projet->archi_numero}}</td>
                                                <td>{{$projet->commentaire}}</td>
                                                <td>{{$projet->bct_nom}}</td>
                                                <td>{{$projet->bct_numero}}</td>
                                                <td>{{$projet->lab_nom}}</td>
                                                <td>{{$projet->lab_numero}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                </div>
                            </div>
                            <div class="tab-pane" id="tabVerticalLeft-2-4" role="tabpanel" aria-labelledby="vertical-tab2-tab2">

                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead>
                                            <tr class="text-nowrap">
                                                <th>Date d'acquisition</th>
                                                <th>Référence contrat d'acquisition</th>
                                                <th>Date de location dépense</th>
                                                <th>Référence contrat de location dépense</th>
                                                <th>Prix d'acquisition</th>
                                                <th>Loyer mensuel dépense</th>
                                                <th>Date d'effet location dépense</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                            <div class="tab-pane" id="tabVerticalLeft-2-5" role="tabpanel"
                                aria-labelledby="vertical-tab2-tab3">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>@lang('themes.champs.dt_demande')</th>
                                                <th>@lang('themes.champs.objet_demande')</th>
                                                <th>@lang('themes.champs.localite')</th>
                                                <th>@lang('themes.champs.quartier')</th>
                                                <th>@lang('themes.champs.local_expertise')</th>
                                                <th>@lang('themes.champs.dt_trans_offre_fil_b')</th>
                                                <th>@lang('themes.champs.dt_reponse_fil_b')</th>
                                                <th>@lang('themes.champs.dt_negociation')</th>
                                                <th>@lang('themes.champs.vln1')</th>
                                                <th>@lang('themes.champs.ref_pv_negociation')</th>
                                                <th>@lang('themes.champs.dt_demande_expertise')</th>
                                                <th>@lang('themes.champs.dt_reponse_credit')</th>
                                                <th>@lang('themes.champs.estimation_expertise')</th>
                                                <th>@lang('themes.champs.vln2')</th>
                                                <th>@lang('themes.champs.dt_envoi_offre_vln2')</th>
                                                <th>@lang('themes.champs.ref_lettre_vln2')</th>
                                                <th>@lang('themes.champs.dt_reponse_fil_a')</th>
                                                <th>@lang('themes.champs.dt_repondre_fil')</th>
                                                <th>@lang('themes.champs.objet_besoin')</th>
                                                <th>@lang('themes.champs.dt_besoin')</th>
                                                <th>@lang('themes.champs.dt_avis_jur')</th>
                                                <th>@lang('themes.champs.dt_reponse_daj')</th>
                                                <th>@lang('themes.champs.dt_envoi_be')</th>
                                                <th>@lang('themes.champs.objet_be')</th>
                                                <th>@lang('themes.champs.date_retour')</th>
                                                <th>@lang('themes.champs.objet_retour')</th>
                                                <th>@lang('themes.champs.dt_signa_convention')</th>
                                                <th>@lang('themes.champs.reponse_filiale_b_vln2')</th>
                                                <th>@lang('themes.champs.dt_reponse_filiale_b_vln2')</th>
                                                <th>@lang('themes.champs.cd_clt')</th>
                                                <th>@lang('themes.champs.voies_prospecter')</th>
                                                <th>@lang('themes.champs.nom_local')</th>
                                                <th>@lang('themes.champs.adr_local')</th>
                                                <th>@lang('themes.champs.beneficiaire')</th>
                                                <th>@lang('themes.champs.ice')</th>
                                                <th>@lang('themes.champs.elc_dmc_beneficiaire')</th>
                                                <th>@lang('themes.champs.cpt_scl')</th>
                                                <th>@lang('themes.champs.nrc_beneficiaire')</th>
                                                <th>@lang('themes.champs.civil')</th>
                                                <th>@lang('themes.champs.nom_rep')</th>
                                                <th>@lang('themes.champs.qlt')</th>
                                                <th>@lang('themes.champs.actv')</th>
                                                <th>@lang('themes.champs.num_cnv')</th>
                                                <th>@lang('themes.champs.cd_mecano')</th>
                                                <th>@lang('themes.champs.dt_eff_cnv')</th>
                                                <th>@lang('themes.champs.ht_mns')</th>
                                                <th>@lang('themes.champs.tva')</th>
                                                <th>@lang('themes.champs.taux_rvs')</th>
                                                <th>@lang('themes.champs.perio_rvs')</th>
                                                <th>@lang('themes.champs.form_rvs')</th>
                                                <th>@lang('themes.champs.duree_conv')</th>
                                                <th>@lang('themes.champs.superficie_detail')</th>
                                                <th>@lang('themes.champs.paiements')</th>
                                                <th>@lang('themes.champs.terme')</th>
                                                <th>@lang('themes.champs.dr_pre_prestataire')</th>
                                                <th>@lang('themes.champs.dr_prea_beneficiaire')</th>
                                                <th>@lang('themes.champs.val_locatives')</th>
                                                <th>@lang('themes.champs.new_date_envoi')</th>
                                                <th>@lang('themes.champs.ref_lettre_prix')</th>
                                                <th>@lang('themes.champs.loyer_m_ttc')</th>
                                                <th>@lang('themes.champs.espace_expertise')</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <div class="tab-pane" id="tabVerticalLeft-2-6" role="tabpanel"
                                aria-labelledby="vertical-tab2-tab6">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nom- sous locataire</th>
                                                <th>Sous-location-totale-ou-partielle</th>
                                                <th>Consistance espace sous loué</th>
                                                <th>Loyer sous location</th>
                                                <th>Autres Rubriques sous location</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <div class="tab-pane" id="tabVerticalLeft-2-7" role="tabpanel"
                                aria-labelledby="vertical-tab2-tab7">
                                
                            </div>
                            <div class="tab-pane" id="tabVerticalLeft-2-8" role="tabpanel"
                                aria-labelledby="vertical-tab2-tab8">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Code catalogue</th>
                                                <th>Source catalogue (CAT BAM/BAM-IAM)</th>
                                                <th>Type (Challenge/Nv ajouté/Ex BD/en location dépense/autre)</th>
                                                <th>Statut foncier (Immatriculé - non immatriculé - en cours d’immatriculation)</th>
                                                <th>Référence foncière (N° de titre foncier/ N° de réquisition)</th>
                                                <th>Statut de Propriété</th>
                                                <th>Statut avec IAM</th>
                                                <th>Date paiement prix de régularisation du terrain</th>
                                                <th>Date signature fiche PE frais ANCFCC</th>
                                                <th>Date paiement frais ANCFCC</th>
                                                <th>Date obtention attestation de réquisition</th>
                                                <th>Date obtention certificat de propriété propre et MAJ</th>
                                                <th>Disposons-nous du contrat d'acquisition?</th>
                                                <th>Y a-t-il des actions déjà entreprises pour assainir ce bien?</th>
                                                <th>Echange BAM IAM</th>
                                                <th>Copropriété BAM IAM</th>
                                                <th>Régularisation</th>
                                                <th>Evacuation</th>
                                                <th>Observations communiquées à DPE</th>
                                                <th>Stade d'assainissement initial</th>
                                                <th>Etat d'avancement </th>
                                                <th>Stade d'assainissement actualisé</th>
                                                <th>Observation</th>
                                                <th>Réponse ANCFCC : </th>
                                                <th>Immatriculé au nom de BAM</th>
                                                <th>N° TF des biens immatriculés au nom de BAM selon la réponse ANCFCC</th>
                                                <th>Actions à entreprendre convenues lors des réunions avec les CF</th>
                                                <th>Degré de complexité</th>
                                                <th>Demande d'acquisition</th>
                                                <th>Expertise du prix d'acquisition</th>
                                                <th>Réception Accord de cession</th>
                                                <th>Etablissement dossier technique</th>
                                                <th>Désignation Notaire</th>
                                                <th>validation dossier technique par le cadastre</th>
                                                <th>Etablissement contrat d'acquisition</th>
                                                <th>Signature contrat par BAM</th>
                                                <th>Signature contrat par propriétaire</th>
                                                <th>Paiement prix d'acquisition</th>
                                                <th>Enregistrement du contrat</th>
                                                <th>Réquisition d'immatriculation </th>
                                                <th>(Bien non immatriculé)</th>
                                                <th>Inscription foncière du contrat (TF, Req)</th>
                                                <th>Paiement des frais immatriculation</th>
                                                <th>Bornage / Bornage complémentaire</th>
                                                <th>Immatriculation au nom de BAM</th>
                                                <th>Retrait certificat de propriété</th>
                                                <th>Commentaire</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <div class="tab-pane" id="tabVerticalLeft-2-9" role="tabpanel"
                                aria-labelledby="vertical-tab2-tab9">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Date d'acquisition</th>
                                                <th>Référence contrat d'acquisition</th>
                                                <th>Date de location dépense</th>
                                                <th>Référence contrat de location dépense</th>
                                                <th>Prix d'acquisition</th>
                                                <th>Loyer mensuel dépense</th>
                                                <th>Date d'effet location dépense</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>



            </div>
        </div>


    </div>
@endsection
