@extends('layouts/contentLayoutMaster')

@section('vendor-style')
    {{-- vendor css files --}}

    <link rel="stylesheet" href="{{ asset('vuexy/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('vuexy/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('vuexy/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />
    <link rel="stylesheet" href="{{ asset('vuexy/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('vuexy/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css') }}" />

    <style>
        .card-datatable {
            display: block;
            overflow-x: auto;
            white-space: nowrap; 
            width: 100%;
        }
        .tab-content > .active {
    display: grid !important;
    /* width: 100%; */
}
.card .nav.nav-tabs {
   min-width: 200px;
}

        .datatable{
            margin-bottom: 2em;
        }
        .tab-content {
            padding: 0px;
            margin-top: 0.5em;
            width: 100%;
        }
    </style>
@endsection


@section('content')
    <x-PageHeader :header="\App\Http\Headers\SiteHeader::show($site)"></x-PageHeader>

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="profile-tab" data-bs-toggle="tab" href="#profile"
                                aria-controls="profile" role="tab" aria-selected="true">
                                Informations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="terrain-tab" data-bs-toggle="tab" href="#terrain"
                                aria-controls="terrain" role="tab" aria-selected="false">
                                Terrains</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="batiment-tab" data-bs-toggle="tab" href="#batiment"
                                aria-controls="batiment" role="tab" aria-selected="false">Batiments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="etage-tab" data-bs-toggle="tab" href="#etage" aria-controls="etage"
                                role="tab" aria-selected="false">Etages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="local-tab" data-bs-toggle="tab" href="#local" aria-controls="local"
                                role="tab" aria-selected="false">Locaux</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="equipement-tab" data-bs-toggle="tab" href="#equipement"
                                aria-controls="equipement" role="tab" aria-selected="false">Equipements</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="profile" aria-labelledby="profile-tab" role="tabpanel">


                            <div class="nav-align-left nav-tabs-shadow mb-4">
                                <ul class="nav nav-tabs nav-left flex-column" role="tablist">
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
                                    <li class="nav-item ">
                                        <a class="nav-link" id="vertical-tab2-tab3" data-bs-toggle="tab"
                                            aria-controls="tabVerticalLeft-2-3" href="#tabVerticalLeft-2-3" role="tab"
                                            aria-selected="false">
                                            Projets immobiliers
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" id="vertical-tab2-tab4" data-bs-toggle="tab"
                                            aria-controls="tabVerticalLeft-2-4" href="#tabVerticalLeft-2-4"
                                            role="tab" aria-selected="false">
                                            Données Financieres
                                        </a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link" id="vertical-tab2-tab5" data-bs-toggle="tab"
                                            aria-controls="tabVerticalLeft-2-5" href="#tabVerticalLeft-2-5"
                                            role="tab" aria-selected="false">
                                            Données Location recette
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="vertical-tab2-tab6" data-bs-toggle="tab"
                                            aria-controls="tabVerticalLeft-2-6" href="#tabVerticalLeft-2-6"
                                            role="tab" aria-selected="false">
                                            Données sous location
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" id="vertical-tab2-tab7" data-bs-toggle="tab"
                                            aria-controls="tabVerticalLeft-2-7" href="#tabVerticalLeft-2-7"
                                            role="tab" aria-selected="false">
                                            Afféctation
                                        </a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link" id="vertical-tab2-tab8" data-bs-toggle="tab"
                                            aria-controls="tabVerticalLeft-2-8" href="#tabVerticalLeft-2-8"
                                            role="tab" aria-selected="false">
                                            Données Location en Dépenses
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="vertical-tab2-tab9" data-bs-toggle="tab"
                                            aria-controls="tabVerticalLeft-2-9" href="#tabVerticalLeft-2-9"
                                            role="tab" aria-selected="false">
                                            Données Assainissement
                                        </a>
                                    </li>

                                </ul>
                                <div class="tab-content" style="    padding-left: 1.5rem;">
                                    <div class="tab-pane active" id="tabVerticalLeft1" role="tabpanel"
                                        aria-labelledby="vertical-tab-tab1">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <x-Presentation.dataCard :items="[
                                                    'models.site.fields.id' => $site->id,
                                                    'models.site.fields.code' => $site->code,
                                                    'models.site.fields.code_patrimoine' => $site->code_patrimoine,
                                                    'models.site.fields.denomination' => $site->denomination,
                                                    'models.site.fields.adresse' => $site->adresse,
                                                    'models.site.fields.type_detention' => $site->type_detention,
                                                    'models.site.fields.proprietaire' => $site->proprietaire,
                                                    'models.site.fields.bailleur' => $site->bailleur_initials->first()?->c_1241,
                                                    'models.site.fields.monument_historique' =>
                                                    $site->monument_historique,
                                                    'models.site.fields.categorie_batiment' =>
                                                    $site->categorie_batiment,
                                                    'models.commune.title_singular' => $site->commune?->nom,
                                                    'models.province.title_singular' => $site->commune?->province?->nom,
                                                    'models.region.title_singular' => $site->commune?->province?->region?->nom,
                                                    'models.region_bam.title_singular' => $site->region_bam?->nom,
                                                    'models.region_postale.title_singular' =>
                                                        $site->region_postale?->nom,
                                                ]"></x-Presentation.dataCard>
                                            </div>
                                            <div class="col-md-6">
                                                <x-map.Show :wkt="$site->wkt"></x-map.Show>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="tab-pane" id="tabVerticalLeft2" role="tabpanel"
                                        aria-labelledby="vertical-tab-tab2">
                                        <x-Presentation.dataCard :items="[
                                            'consistance' => $site->consistance,
                                            'models.site.fields.superficie_total' => $site->superficie_total,
                                            'models.site.fields.superficie_batie' => $site->batiments->sum('superficie_terrain'),
                                            'models.site.fields.superficie_plancher' => $site->superficie_plancher,
                                            'models.site.fields.superficie_terrain' => ($site->terrains->sum('superficie') - $site->batiments->sum('superficie_terrain')),
                                            'models.site.fields.sub' => $site->sub,
                                            'models.site.fields.sun' => $site->sun,
                                            'models.site.fields.shob' => $site->shob,
                                            'models.site.fields.shon' => $site->shon,
                                            'models.site.fields.superficie_louee' => $site->superficie_louee,
                                            'models.site.fields.hauteur' => $site->hauteur,
                                            'models.site.fields.carnet_sante' => $site->carnet_sante,
                                        ]"></x-Presentation.dataCard>
                                    </div>

                                    <div class="tab-pane" id="tabVerticalLeft-2-3" role="tabpanel" aria-labelledby="vertical-tab2-tab3">
                                        <div class="card-datatable text-nowrap">
                                            <table class="table datatable">
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
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($site->projets as $projet)
                                                        <tr>
                                                            <td>
                                                                
                                                                <span class="badge bg-{{ $projet->etat == 0 ? 'secondary' : 'success'}}"><span>{{ $projet->etat == 0 ? 'En cours' : 'Finaliser'}}</span></span>
                                                            </td>
                                                            <td>{{ $projet->type_travaux }}</td>
                                                            <td>{{ $projet->numero_marche }}</td>
                                                            <td>{{ $projet->annee_realisation }}</td>
                                                            <td>{{ $projet->version }}</td>
                                                            <td>{{ $projet->date_retrait?->format('d/m/Y') }}</td>
                                                            <td>{{ $projet->delai_travaux }}</td>
                                                            <td>{{ $projet->date_reception_provisoire?->format('d/m/Y') }}</td>
                                                            <td>{{ $projet->date_reception_definitive?->format('d/m/Y') }}</td>
                                                            <td>{{ $projet->montant_ht }}</td>
                                                            <td>{{ $projet->bet_nom }}</td>
                                                            <td>{{ $projet->bet_numero }}</td>
                                                            <td>{{ $projet->archi_nom }}</td>
                                                            <td>{{ $projet->archi_numero }}</td>
                                                            <td>{{ $projet->commentaire }}</td>
                                                            <td>{{ $projet->bct_nom }}</td>
                                                            <td>{{ $projet->bct_numero }}</td>
                                                            <td>{{ $projet->lab_nom }}</td>
                                                            <td>{{ $projet->lab_numero }}</td>
                                                            <td> 
                                                                <a href="{{route('armoire.projet.show',[$projet->id])}}" class="btn btn-sm btn-icon item-edit">
                                                                    <i class="text-primary ti ti-eye"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabVerticalLeft-2-4" role="tabpanel"
                                        aria-labelledby="vertical-tab2-tab2">
                                        <div class="table-responsive text-nowrap">
                                            <table class="table datatable">
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
                                        @include("admin.sites.show-recette")
                                    </div>
                                    <div class="tab-pane" id="tabVerticalLeft-2-6" role="tabpanel"
                                        aria-labelledby="vertical-tab2-tab6">
                                        <div class="card-datatable text-nowrap">
                                            <table class="table datatable">
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
                                                    @foreach($site->sous_locations as $sl)
                                                    <tr>
                                                        <td>{{$sl->locataire}}</td>
                                                        <td>{{$sl->totale}}</td>
                                                        <td>{{$sl->consistance}}</td>
                                                        <td>{{$sl->loyer}}</td>
                                                        <td>{{$sl->terme}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabVerticalLeft-2-7" role="tabpanel"
                                        aria-labelledby="vertical-tab2-tab7">

                                    </div>
                                    <div class="tab-pane" id="tabVerticalLeft-2-8" role="tabpanel"
                                        aria-labelledby="vertical-tab2-tab8">
                                        @include('admin.sites.show-depense')
                                    </div>
                                    <div class="tab-pane" id="tabVerticalLeft-2-9" role="tabpanel"
                                        aria-labelledby="vertical-tab2-tab9">
                                        <div class="card-datatable text-nowrap">
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
                        <div class="tab-pane" id="terrain" aria-labelledby="terrain-tab" role="tabpanel">
                            <x-presentation.table :columns="['code','nom', 'superficie', 'titre_foncier', 'propretaire']" :items="$site->terrains" route="admin.terrains"
                                lang="models.terrain.fields."></x-presentation.table>
                        </div>
                        <div class="tab-pane" id="batiment" aria-labelledby="batiment-tab" role="tabpanel">
                            <x-presentation.table :columns="['code','carnet_sante', 'prix_acquisition']" :items="$site->batiments" route="admin.batiments"
                                lang="models.batiment.fields."></x-presentation.table>
                        </div>
                        <div class="tab-pane" id="etage" aria-labelledby="etage-tab" role="tabpanel">
                            <x-presentation.table :columns="['code','niveau','adresse']" :items="$site->etages->map(function($e){
                                $e->niveau = match($e->niveau) {
                                    '-1' => 'SS',
                                    '0' => 'RDC',
                                    '1' => 'R+1',
                                    '2' => 'R+2',
                                    '3' => 'R+3',
                                    '4' => 'R+4',
                                    '5' => 'R+5',
                                    '6' => 'R+6',
                                    '7' => 'R+7',
                                    '8' => 'R+8',
                                    '9' => 'R+9',
                                    '10' => 'R+10',
                                    '11' => 'R+11',
                                    '12' => 'R+12',
                                    default => null
                                };
                                return $e;
                            })" route="admin.etages"
                                lang="models.etage.fields."></x-presentation.table>
                        </div>
                        <div class="tab-pane" id="local" aria-labelledby="local-tab" role="tabpanel">
                            <x-presentation.table :columns="['code','type_activite','type_espace','nom_espace','superficie_espace' ,'niveau']" :items="$site->locals->map(function($e){
                                $e->niveau = match($e->etage->niveau) {
                                    '-1' => 'SS',
                                    '0' => 'RDC',
                                    '1' => 'R+1',
                                    '2' => 'R+2',
                                    '3' => 'R+3',
                                    '4' => 'R+4',
                                    '5' => 'R+5',
                                    '6' => 'R+6',
                                    '7' => 'R+7',
                                    '8' => 'R+8',
                                    '9' => 'R+9',
                                    '10' => 'R+10',
                                    '11' => 'R+11',
                                    '12' => 'R+12',
                                    default => null
                                };
                                return $e;
                            })" route="admin.locals"
                                lang="models.local.fields."></x-presentation.table>
                        </div>
                        <div class="tab-pane" id="equipement" aria-labelledby="equipement-tab" role="tabpanel">
                            <x-presentation.table :columns="[
                                'code',
                                'groupe',
                                'equipement',
                                'qte',
                                'type',
                                'marque',
                                'modele',
                                'localisation',
                            ]" :items="$site->equipements" route="maintenance.equipement"
                                lang="maintenance::models.equipement.fields.">
                            </x-presentation.table>
                        </div>
                    </div>
                </div>



            </div>


        </div>

    </div>
    </div>


    <div class="modal fade" id="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modal-title"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-body">
                {{-- <table class="table">
                    <tbody>
                        <tr>
                            <td>{{__('armoire::models.plan.files.file_plan')}}</td>
                            <td>10/02/2022</td>
                            <td><a href="#" onclick="previewDoc('1','pdf')"><i class="ti ti-eye"></i></a></td>
                        </tr>
                    </tbody>
                </table> --}}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
        </div>
    </div>

@endsection




@section('vendor-script')
    <script src="{{ asset('vuexy/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('vuexy/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('vuexy/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
    <script src="{{ asset('vuexy/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>
    <script src="{{ asset('vuexy/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js') }}"></script>
    <script src="{{ asset('vuexy/vendor/libs/datatables-buttons/datatables-buttons.js') }}"></script>
    <script src="{{ asset('vuexy/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js') }}"></script>
    <script src="{{ asset('vuexy/vendor/libs/jszip/jszip.js') }}"></script>
    <script src="{{ asset('vuexy/vendor/libs/pdfmake/pdfmake.js') }}"></script>
    <script src="{{ asset('vuexy/vendor/libs/datatables-buttons/buttons.html5.js') }}"></script>
    <script src="{{ asset('vuexy/vendor/libs/datatables-buttons/buttons.print.js') }}"></script>
    <script src="{{ asset('vuexy/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.js') }}"></script>
    <script src="{{ asset('vuexy/vendor/libs/datatables-rowgroup/datatables.rowgroup.js') }}"></script>
@endsection



@section('script')
    <script>
        $(".datatable").DataTable({
            // "scrollX": true,
            // responsive: {
            //     details: {
            //         display: $.fn.dataTable.Responsive.display.modal({
            //             header: function(a) {
            //                 return "Details of " + a.data().full_name
            //             }
            //         }),
            //         type: "column",
            //         renderer: function(a, t, e) {
            //             e = $.map(e, function(a, t) {
            //                 return "" !== a.title ? '<tr data-dt-row="' + a.rowIndex + '" data-dt-column="' + a.columnIndex + '"><td>' + a.title + ":</td> <td>" + a.data + "</td></tr>" : ""
            //             }).join("");
            //             return !!e && $('<table class="table"/><tbody />').append(e)
            //         }
            //     }
            // }
        });


        function showDocuments(id,theme_id){
            $('#modal-title').html('Documents');
            $('#modal-body').html('');
            $('#modal').modal('show');
            
        }
        function showEdit(id,theme_id){
            $('#modal-title').html('Edition');
            $.post("{{url('api/processus/theme/get')}}",{id:theme_id}).then(theme=>{
                $.post("{{url('api/processus/theme/getrow')}}",{id:id,theme_id:theme_id}).then(row=>{
                    let body = '';
                    theme.champs.forEach(c=>{
                        
                        body += `
                        <div>
                            <label for="c_${c.id}" class="form-label">${c.label}</label>
                            <input value="${row['c_'+c.id] ?? ''}" type="text" class="form-control" id="c_${c.id}" placeholder="" />
                        </div>
                        `;
                    })
                    $('#modal-body').html(body);
                    $('#modal').modal('show');
                });
            })
        }
        function showList(id,theme_id,key){
            $('#modal-title').html('Avenants');
            $.post("{{url('api/processus/theme/get')}}",{id:theme_id}).then(theme=>{
                $.post("{{url('api/processus/theme/getrows')}}",{id:id,theme_id:theme_id,key:key}).then(row=>{
                    
                    
                    let body = `
                    <div class="table-responsive ">
                        <table class="table datatable">
                            <thead>
                                <tr class="">
                    `;
                    theme.champs.forEach(c=>{
                        
                        body += `<th>${c.label}</th>`;
                    });

                    body += `
                    </tr>
                    </thead>
                    <tbody>
                    `;
                    row.forEach(r=>{
                        body += `<tr>`;
                        theme.champs.forEach(c=>{
                            body += `<td>${r['c_'+c.id]}</td>`;
                        });
                        body += `</tr>`;
                    });

                    body += `
                    </tbody>
                    </table>
                    </div>
                    `;

                    if(row.length == 0){
                        body="rien à afficher";
                    }

                    $('#modal-body').html(body);
                    $('#modal').modal('show');
                });
            })
        }

        function showDelete(id,theme_id){
            
            
        }
        function showAvenant(id,theme_id){
            $('#modal-title').html('Avenants');
            $('#modal-body').html(`
            
            `);
            $('#modal').modal('show');
            
        }
        function showFactures(id,theme_id){
            $('#modal-title').html('Factures');
            $('#modal-body').html('');
            $('#modal').modal('show');
            
        }


    </script>
@endsection
