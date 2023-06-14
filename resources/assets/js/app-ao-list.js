/**
 * Page User List
 */

 'use strict';

 // Datatable (jquery)
 $(function () {
   let borderColor, bodyBg, headingColor;
 
   if (isDarkStyle) {
     borderColor = config.colors_dark.borderColor;
     bodyBg = config.colors_dark.bodyBg;
     headingColor = config.colors_dark.headingColor;
   } else {
     borderColor = config.colors.borderColor;
     bodyBg = config.colors.bodyBg;
     headingColor = config.colors.headingColor;
   }
 
   // Variable declaration for table
   var dt_user_table = $('.datatables-users'),
     select2 = $('.select2'),
     userView = baseUrl + 'cv/gestion/view/';
 
   if (select2.length) {
     var $this = select2;
     $this.wrap('<div class="position-relative"></div>').select2({
       placeholder: 'Select Country',
       dropdownParent: $this.parent()
     });
   }
 
  //  'type_ao',
  //       'pay_ao',
  //       'secteur_ao',
  //       'financement_ao',
  //       'ministere_ao',
  //       'n_ao',
  //       'marche_ao',
  //       'lot_ao',
  //       'objet_ao',
  //       'client_ao',
  //       'objet_ao',
  //       'caution_provisoire_ao',
  //       'annulation_ao',
  //       'budget_ao',
  //       'date_limit_ao',
  //       'mantant_soumission_ao',
  //       'bu_ao',
  //       'departement_ao',
  //       'responsable_ao',
  //       'adjudication_ao',
  //       'date_adjudication_ao',
  //       'motif_ao',
  //       'caution_definitive_ao',
  //       'rejet_ao',
  //       'adjudicataire_ao',
  //       'mantant_moins_ao',
  //       'partenariat_ao',
  //       'date_signature_ao',
  //       'archived',
   // Users datatable
   if(dt_user_table.length) {
     var dt_user = dt_user_table.DataTable({
       ajax: baseUrl + 'ao/getAos',
       columns: [
         // columns according to JSON
         { data: 'n_ao' },
         { data: 'type_ao' },
         { data: 'pay_ao' },
         { data: 'client_ao' },
         { data: 'mantant_soumission_ao' },
         { data: 'bu_ao' },
         { data: 'responsable_ao' },
         { data: 'date_limit_ao' },
         { data: 'action' },
       ],
       columnDefs: [
         {
           className: 'control',
           searchable: false,
           orderable: false,
           responsivePriority: 2,
           targets: 0,
           render: function (data, type, full, meta) {
            var $n_ao = full['n_ao'];
            return '<span class="fw-semibold">' + $n_ao + '</span>';
           }
         },
         {
           targets: 6,
           orderable: false,
           render: function (data, type, full, meta) {
             var $responsable_ao = full['responsable_ao'];
             return '<span class="d-none">' + $responsable_ao + '</span>';
           }
         },   
         {
           // Actions
           targets: -1,
           title: 'Actions',
           searchable: false,
           orderable: false,
           render: function (data, type, full, meta) {
             return (
               '<div class="d-flex align-items-center">' +
               '<a href="javascript:;" onclick="editAO('+full['id_ao']+')" class="text-body"><i class="ti ti-edit text-info ti-sm me-2"></i></a>' +
               '<a href="javascript:;" id="btn-'+full['id_ao']+'" class="text-body delete-record"><i class="ti ti-trash text-danger ti-sm mx-2"></i></a>' +
               '<a href="javascript:;" class="text-body dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-sm mx-1"></i></a>' +
               '<div class="dropdown-menu dropdown-menu-end m-0">' +
               '<a href="' +
               userView+full['id_ao']+
               '" class="dropdown-item">View</a>' +
               '<a href="javascript:;" class="dropdown-item">Suspend</a>' +
               '</div>' +
               '</div>'
             );
           }
         },
       ],
       // add class name to td
       createdRow: function (row, data, dataIndex) {
         $(row).attr('id', 'row_' + data['ID_Salarie']);
       },
       order: [[1, 'desc']],
       dom:
         '<"row me-2"' +
         '<"col-md-2"<"me-3"l>>' +
         '<"col-md-10"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0"fB>>' +
         '>t' +
         '<"row mx-2"' +
         '<"col-sm-12 col-md-6"i>' +
         '<"col-sm-12 col-md-6"p>' +
         '>',
       language: {
         sLengthMenu: '_MENU_',
         search: '',
         searchPlaceholder: 'Recherche Avancée..'
       },
       // Buttons with Dropdown
       buttons: [
         {
           extend: 'collection',
           className: 'btn btn-label-secondary dropdown-toggle mx-3',
           text: '<i class="ti ti-screen-share me-1 ti-xs"></i>Plus',
           buttons: [
             {
               extend: 'print',
               text: '<i class="ti ti-printer me-2" ></i>Print',
               className: 'dropdown-item',
               exportOptions: {
                 columns: [1, 2, 3, 4, 5],
                 // prevent avatar to be print
                 format: {
                   body: function (inner, coldex, rowdex) {
                     if (inner.length <= 0) return inner;
                     var el = $.parseHTML(inner);
                     var result = '';
                     $.each(el, function (index, item) {
                       if (item.classList !== undefined && item.classList.contains('user-name')) {
                         result = result + item.lastChild.firstChild.textContent;
                       } else if (item.innerText === undefined) {
                         result = result + item.textContent;
                       } else result = result + item.innerText;
                     });
                     return result;
                   }
                 }
               },
               customize: function (win) {
                 //customize print view for dark
                 $(win.document.body)
                   .css('color', headingColor)
                   .css('border-color', borderColor)
                   .css('background-color', bodyBg);
                 $(win.document.body)
                   .find('table')
                   .addClass('compact')
                   .css('color', 'inherit')
                   .css('border-color', 'inherit')
                   .css('background-color', 'inherit');
               }
             },
             {
               extend: 'csv',
               text: '<i class="ti ti-file-text me-2" ></i>Csv',
               className: 'dropdown-item',
               exportOptions: {
                 columns: [1, 2, 3, 4, 5],
                 // prevent avatar to be display
                 format: {
                   body: function (inner, coldex, rowdex) {
                     if (inner.length <= 0) return inner;
                     var el = $.parseHTML(inner);
                     var result = '';
                     $.each(el, function (index, item) {
                       if (item.classList !== undefined && item.classList.contains('user-name')) {
                         result = result + item.lastChild.firstChild.textContent;
                       } else if (item.innerText === undefined) {
                         result = result + item.textContent;
                       } else result = result + item.innerText;
                     });
                     return result;
                   }
                 }
               }
             },
             {
               extend: 'excel',
               text: '<i class="ti ti-file-spreadsheet me-2"></i>Excel',
               className: 'dropdown-item',
               exportOptions: {
                 columns: [1, 2, 3, 4, 5],
                 // prevent avatar to be display
                 format: {
                   body: function (inner, coldex, rowdex) {
                     if (inner.length <= 0) return inner;
                     var el = $.parseHTML(inner);
                     var result = '';
                     $.each(el, function (index, item) {
                       if (item.classList !== undefined && item.classList.contains('user-name')) {
                         result = result + item.lastChild.firstChild.textContent;
                       } else if (item.innerText === undefined) {
                         result = result + item.textContent;
                       } else result = result + item.innerText;
                     });
                     return result;
                   }
                 }
               }
             },
             {
               extend: 'pdf',
               text: '<i class="ti ti-file-code-2 me-2"></i>Pdf',
               className: 'dropdown-item',
               exportOptions: {
                 columns: [1, 2, 3, 4, 5],
                 // prevent avatar to be display
                 format: {
                   body: function (inner, coldex, rowdex) {
                     if (inner.length <= 0) return inner;
                     var el = $.parseHTML(inner);
                     var result = '';
                     $.each(el, function (index, item) {
                       if (item.classList !== undefined && item.classList.contains('user-name')) {
                         result = result + item.lastChild.firstChild.textContent;
                       } else if (item.innerText === undefined) {
                         result = result + item.textContent;
                       } else result = result + item.innerText;
                     });
                     return result;
                   }
                 }
               }
             },
             // {
             //   extend: 'copy',
             //   text: '<i class="ti ti-copy me-2" ></i>Copy',
             //   className: 'dropdown-item',
             //   exportOptions: {
             //     columns: [1, 2, 3, 4, 5],
             //     // prevent avatar to be display
             //     format: {
             //       body: function (inner, coldex, rowdex) {
             //         if (inner.length <= 0) return inner;
             //         var el = $.parseHTML(inner);
             //         var result = '';
             //         $.each(el, function (index, item) {
             //           if (item.classList !== undefined && item.classList.contains('user-name')) {
             //             result = result + item.lastChild.firstChild.textContent;
             //           } else if (item.innerText === undefined) {
             //             result = result + item.textContent;
             //           } else result = result + item.innerText;
             //         });
             //         return result;
             //       }
             //     }
             //   }
             // },
             {
               text: '<i class="ti ti-copy me-2" ></i>Archived AOs',
               className: 'dropdown-item',
               attr: {
                 onclick: 'window.location.href="'+ baseUrl + 'ao/gestion/archived"'
               }
             }
           ]
         },
         {
           text: '<i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Télécharger</span>',
           className: 'btn btn-info btn-gradient',
           attr: {
             onclick: "$('#uploadExcel').click();"
           }
         },
         {
           text: '<i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Nouvel AO</span>',
           className: 'btn btn-primary btn-gradient mx-3',
           attr: {
             onclick: 'window.location.href="' + baseUrl + 'ao/create"'
           }
         }
       ],
 
       initComplete: function () {
         // Adding Departement filter once table initialized
         this.api()
           .columns(1)
           .every(function () {
             var column = this;
             var select = $(
               '<select id="UserPrenom" class="form-select text-capitalize"><option value=""> Sélectionnez Par Type </option></select>'
             )
               .appendTo('.ao_type')
               .on('change', function () {
                 var val = $.fn.dataTable.util.escapeRegex($(this).val());
                 // column.search(val ? '^' + val + '$' : '', true, false).draw();
               });
 
             column
               .data()
               .unique()
               .sort()
               .each(function (d, j) {
                 select.append('<option value="' + d + '">' + d + '</option>');
               });
           });
         // Adding poste filter once table initialized
         this.api()
           .columns(3)
           .every(function () {
             var column = this;
             var select = $(
               '<select id="UserPlan" class="form-select text-capitalize"><option value=""> Sélectionnez Par Client </option></select>'
             )
               .appendTo('.ao_client')
               .on('change', function () {
                 var val = $.fn.dataTable.util.escapeRegex($(this).val());
                 column.search(val ? '^' + val + '$' : '', true, false).draw();
               });
 
             column
               .data()
               .unique()
               .sort()
               .each(function (d, j) {
                 select.append('<option value="' + d + '">' + d + '</option>');
               });
           });
         // Adding Profil filter once table initialized
         this.api()
           .columns(5)
           .every(function () {
             var column = this;
             var select = $(
               '<select id="UserProfil" class="form-select text-capitalize"><option value=""> Sélectionnez Par BU </option></select>'
             )
               .appendTo('.ao_bu')
               .on('change', function () {
                 var val = $.fn.dataTable.util.escapeRegex($(this).val());
                 column.search(val ? '^' + val + '$' : '', true, false).draw();
               });
 
             column
               .data()
               .unique()
               .sort()
               .each(function (d, j) {
                 select.append('<option value="' + d + '">' + d + '</option>');
               });
           });

           // Adding Profil filter once table initialized
         this.api()
         .columns(6)
         .every(function () {
           var column = this;
           var select = $(
             '<select id="UserProfil" class="form-select text-capitalize"><option value=""> Sélectionnez Par Responsable </option></select>'
           )
             .appendTo('.ao_rh')
             .on('change', function () {
               var val = $.fn.dataTable.util.escapeRegex($(this).val());
               column.search(val ? '^' + val + '$' : '', true, false).draw();
             });

           column
             .data()
             .unique()
             .sort()
             .each(function (d, j) {
               select.append('<option value="' + d + '">' + d + '</option>');
             });
         });
       }
     });
   }
 
   // Delete Record
   $('.datatables-users tbody').on('click', '.delete-record', function () {
     //detete the employee from the database
     //get the employee id from the id attr of the delete button
     var id = $(this).attr('id').split('-')[1];
     console.log(id);
     var url = baseUrl + 'ao/' + id;
     var token = $('meta[name="csrf-token"]').attr('content');
     //confirm that you want to delete the employee
     if (!confirm('Voulez-vous vraiment supprimer cet AO?')) return;
     $('#row_' + id).remove();
     $.ajax({
       url: url,
       type: 'DELETE',
       data: {
         _token: token,
         id: id
       },
       success: function (response) {
          alert('AO supprimé avec succès');
          location.reload();
       },
     });
   });
 
   // Filter form control to default size
   // ? setTimeout used for multilingual table initialization
   setTimeout(() => {
     $('.dataTables_filter .form-control').removeClass('form-control-sm');
     $('.dataTables_length .form-select').removeClass('form-select-sm');
   }, 300);
 });
 
 
 function editAO(id){
   window.location.href= baseUrl + 'ao/edit/'+id;
 }
 
 