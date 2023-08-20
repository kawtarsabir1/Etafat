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

  
  var columnns = [
    { data: 'nRef' },
    { data: 'societe' },
    { data: 'client' },
    { data: 'nMarche' },
    { data: 'nIntern' },
    { data: 'annee' },
    { data: 'mantant' },
    { data: 'montantTraveaux' },
    { data: 'localisation' },
    { data: 'objet' },
    { data: 'categories' },
    { data: 'fiche' },
    { data: 'action' },
  ];

  // Users datatable
  if (dt_user_table.length) {
    var dt_user = dt_user_table.DataTable({
      ajax: baseUrl + 'cv/getRefs', // JSON file to add data
      columns: columnns,
      columnDefs: [
        {
          // Plans
          className: 'control',
          responsivePriority: 2,
          targets: 0,
          render: function (data, type, full, meta) {
            var nRef = full['nRef'];
            return '<span class="fw-normal h6">' + nRef + '</span>';
          }
        },
        {
          // Plans
          targets: 11,
          render: function (data, type, full, meta) {
            var fiche = full['fiche'];
            return `
              <div class="d-flex align-items-center">
                <a href="javascript:;" onclick="openPdf('${fiche}')" class="text-body"><i class="ti ti-eye text-success ti-sm me-2"></i></a>
              </div>`;
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
              '<a href="javascript:;" onclick="editEmployee('+full['ID_Ref']+')" class="text-body"><i class="ti ti-edit text-info ti-sm me-2"></i></a>' +
              '<a href="javascript:;" id="btn-'+full['ID_Ref']+'" class="text-body delete-record"><i class="ti ti-trash text-danger ti-sm mx-2"></i></a>' +
              '<a href="/cv/reference/view/'+full['ID_Ref']+'" id="btn-'+full['ID_Ref']+'" class="text-body delete-record"><i class="ti ti-trash text-danger ti-sm mx-2"></i></a>' +
              // '<a href="javascript:;" class="text-body dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-sm mx-1"></i></a>' +
              // '<div class="dropdown-menu dropdown-menu-end m-0">' +
              // '<a href="' +
              // full['ID_Ref']+
              // '" class="dropdown-item">View</a>' +
              // '<a href="javascript:;" class="dropdown-item">Suspend</a>' +
              // '</div>' +
              '</div>'
            );
          }
        },
      ],
      // add class name to td
      createdRow: function (row, data, dataIndex) {
        $(row).attr('id', 'row_' + data['id']);
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
        sLengthMenu: 'Montrer: _MENU_',
          search: '',
          zeroRecords: 'Aucun enregistrement correspondant trouvé',
          emptyTable: 'Aucune donnée disponible',
          searchPlaceholder: 'Recherche avancée ...',
          paginate:{
            next : "Suivant",
            previous : "Précédent"
          },
          loadingRecords: 'Chargement ...',
          infoEmpty: "Aucun enregistrement disponible",
          infoFiltered: "(filtré sur _MAX_ enregistrements au total)",
          info: "Affichage de _START_ à _END_ sur _TOTAL_ enregistrements",
      },
      // Buttons with Dropdown
      buttons: [
        {
          text: '<i class="ti ti-columns me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Choisir les Champs</span>',
          className: 'btn btn-success btn-gradient btn-cols-select mx-3',
        },
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
              text: '<i class="ti ti-copy me-2" ></i>Archived Refs',
              className: 'dropdown-item',
              attr: {
                onclick: 'window.location.href="' + baseUrl + 'cv/references/archived"'
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
          text: '<i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Nouvelle référence</span>',
          className: 'btn btn-primary btn-gradient mx-3',
          attr: {
            onclick: 'window.location.href="'+ baseUrl + 'cv/reference/create"'
          }
        }
      ],

      initComplete: function () {
        // Adding poste filter once table initialized
        this.api()
          .columns(2)
          .every(function () {
            var column = this;
            var select = $(
              '<select id="UserPlan" class="form-select text-capitalize"><option value=""> Sélectionner Par Client </option></select>'
            )
              .appendTo('.ref_Client')
              .on('change', function () {
                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                column.search(val ? '^' + val + '$' : '', true, false).draw();
              });

            column
              .data()
              .unique()
              .sort()
              .each(function (d, j) {
                var categories = d.split(',');
                categories.forEach(function (item, index) {
                  if (item.length > 0) select.append('<option value="' + item + '">' + item + '</option>');
                });
              });
          });

          this.api()
          .columns(1)
          .every(function () {
            var column = this;
            var select = $(
              '<select id="UserPlan" class="form-select text-capitalize"><option value=""> Sélectionner Par Societe </option></select>'
            )
              .appendTo('.ref_societe')
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

          this.api()
          .columns(10)
          .every(function () {
            var column = this;
            var select = $(
              '<select id="UserPlan" class="form-select text-capitalize"><option value=""> Sélectionner Par Category </option></select>'
            )
              .appendTo('.ref_category')
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
    var url = baseUrl + 'cv/reference/' + id;
    var token = $('meta[name="csrf-token"]').attr('content');
    if (!confirm('Are you sure you want to delete this Ref?')) return;
    $('#row_' + id).remove();
    $.ajax({
      url: url,
      type: 'DELETE',
      data: {
        _token: token,
        id: id
      },
      success: function (response) {
        alert('Ref deleted successfully');
        window.location.href = baseUrl + 'cv/references';
      },
    });
  });

  // Filter form control to default size
  // ? setTimeout used for multilingual table initialization
  setTimeout(() => {
    $('.dataTables_filter .form-control').removeClass('form-control-sm');
    $('.dataTables_length .form-select').removeClass('form-select-sm');
  }, 300);


  $('.btn-cols-select').on('click', function () {
    modal.modal('show');
  });

  let columnnsStored = JSON.parse(localStorage.getItem('columnsUncheckedRefs'));
  if(columnnsStored != null || columnnsStored != undefined){
    console.log(columnnsStored)
    columnnsStored.forEach(element => {
      dt_user_table.DataTable().column(element).visible(false);
    });
  }
  
  
  var modal = $('<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="columnSelectionModalLabel" aria-hidden="true"></div>');
    var dialog = $('<div class="modal-dialog"></div>').appendTo(modal);
    var content = $('<div class="modal-content"></div>').appendTo(dialog);

    var header = $('<div class="modal-header"></div>').appendTo(content);
    $('<h5 class="modal-title">Choisissez les colonnes à afficher</h5>').appendTo(header);
    $('<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>').appendTo(header);

    var body = $('<div class="modal-body"></div>').appendTo(content);
    var columns = dt_user_table.DataTable().columns().header().toArray();
    console.log(columns);
    columns.forEach(function (column, index) {
      var columnName = $(column).text();
      var isChecked = dt_user_table.DataTable().column(index).visible();
      var checkbox = $('<div class="form-check"></div>').appendTo(body);
      $('<input class="form-check-input" type="checkbox" value="' + index + '" ' + (isChecked ? 'checked' : '') + '>').appendTo(checkbox);
      $('<label class="form-check-label">' + columnName + '</label>').appendTo(checkbox);
    });
  
    // Modal footer
    var footer = $('<div class="modal-footer"></div>').appendTo(content);
    $('<button type="button" class="btn btn-primary btn-apply-cols">Appliquer</button>').appendTo(footer);
  
    $(document).on('click', '.btn-apply-cols', function () {
      var modal = $('.modal');
      var columnsStored = JSON.parse(localStorage.getItem('columnsUncheckedRefs'));
      var selectedColumns = modal.find('input:checked').map(function () {
        return parseInt($(this).val());
      }).get();
      var columnsUnchecked = modal.find('input:not(:checked)').map(function () {
        return parseInt($(this).val());
      }).get();
      localStorage.setItem('columnsUncheckedRefs', JSON.stringify(columnsUnchecked));
      dt_user_table.DataTable().columns().visible(false);
      selectedColumns.forEach(function (columnIndex) {
        var index = columnsStored.indexOf(columnIndex);
        if(index > -1){
          columnsStored.splice(index, 1);
        }
        dt_user_table.DataTable().column(columnIndex).visible(true);
      });
      console.log(selectedColumns)
      modal.modal('hide');
    });
});


function editEmployee(id){
  window.location.href= baseUrl + 'cv/reference/edit/'+id;
}

function openPdf(fiche){
  var modal = $("#exLargeModal");
  var link = baseUrl+"../storage/fiches/"+fiche+".pdf";
  modal.find('iframe').attr('src', link);
  modal.modal("show");
}
