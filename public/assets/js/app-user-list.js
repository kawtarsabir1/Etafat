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

  // Users datatable
  if (dt_user_table.length) {
    var dt_user = dt_user_table.DataTable({
      ajax: baseUrl + 'admin/gestion/users', // JSON fie to add data
      columns: [
        // columns according to JSON
        { data: '' },
        { data: 'name' },
        { data: 'email' },
        { data: 'Role' },
        { data: 'Actions' },
      ],
      columnDefs: [
        //add attribute id each tr
        {
          className: 'control',
          targets: 0,
          responsivePriority: 2,
          render: function (data, type, full, meta) {
            var name = full['name'],id = full['id'],avatar = full['avatar'],output;
            if(avatar != null){
              output = '<img src="'+avatar+'" alt="avatar" class="avatar-img rounded-circle">';
            }else{
              var nameLenght = name.split(' ').length,initial;
              if(nameLenght > 1){
                var nameSplit = name.split(' ');
                initial = nameSplit[0].charAt(0) + nameSplit[1].charAt(0); 
              }
              else{
                initial = name.charAt(0) + name.charAt(1);
              }
              var stateNum = Math.floor(Math.random() * 6),
              states = ['success', 'danger', 'warning', 'info', 'primary', 'secondary'],
              state = states[stateNum];
              initial = initial.toUpperCase();
              output = '<span class="avatar-initial rounded-circle bg-label-' + state + '">' + initial + '</span>';
            }
            // Creates full output for row
            var row_output =
              '<div class="d-flex justify-content-start align-items-center user-name">' +
              '<div class="avatar-wrapper">' +
              '<a href="' +
              userView+ id +
              '" >' +
              '<div class="avatar avatar-sm me-3">' +
              output +
              '</div></a>' +
              '</div>' +
              '</div>';
            return row_output;
          }
        }, 
        {
          targets: 3,
          render: function (data, type, full, meta) {
            var roles = full['roles'];
            var output = '';
            for (var i = 0; i < roles.length; i++) {
              output +=
                '<span class="badge rounded-pill bg-primary text-white fw-normal mx-1">' +
                roles[i].title +
                '</span>';
            }
            return output;
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
              '<a href="javascript:;" onclick="editEmployee('+full['ID_Salarie']+')" class="text-body"><i class="ti ti-edit text-info ti-sm me-2"></i></a>' +
              '<a href="javascript:;" id="btn-'+full['ID_Salarie']+'" class="text-body delete-record"><i class="ti ti-trash text-danger ti-sm mx-2"></i></a>' +
              '<a href="javascript:;" class="text-body dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-sm mx-1"></i></a>' +
              '<div class="dropdown-menu dropdown-menu-end m-0">' +
              '<a href="' +
              userView+full['ID_Salarie']+
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
          text: '<i class="ti ti-columns me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Choisir les Champs</span>',
          className: 'btn btn-success btn-gradient btn-cols-select mx-3',
        },
        {
          extend: 'collection',
          className: 'btn btn-label-secondary dropdown-toggle',
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
            }
          ]
        },
        {
          text: '<i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Nouvel Employé</span>',
          className: 'btn btn-primary btn-gradient mx-3',
          attr: {
            onclick: 'window.location.href="' + baseUrl + 'admin/user/create"'
          }
        }
      ],

      initComplete: function () {
        // Adding Departement filter once table initialized
        this.api()
          .columns(7)
          .every(function () {
            var column = this;
            var select = $(
              '<select id="UserPrenom" class="form-select text-capitalize"><option value=""> Sélectionnez Par Département Affectation </option></select>'
            )
              .appendTo('.user_Departement')
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
              '<select id="UserPlan" class="form-select text-capitalize"><option value=""> Sélectionnez Par Poste </option></select>'
            )
              .appendTo('.user_poste')
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
              '<select id="UserProfil" class="form-select text-capitalize"><option value=""> Sélectionnez Par Profil </option></select>'
            )
              .appendTo('.user_profil')
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
    var url = baseUrl + 'cv/gestion/' + id;
    var token = $('meta[name="csrf-token"]').attr('content');
    //confirm that you want to delete the employee
    if (!confirm('Are you sure you want to delete this employee?')) return;
    $('#row_' + id).remove();
    $.ajax({
      url: url,
      type: 'DELETE',
      data: {
        _token: token,
        id: id
      },
      success: function (response) {
        alert('Employee deleted successfully');
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
  
  var modal = $('<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="columnSelectionModalLabel" aria-hidden="true"></div>');
    var dialog = $('<div class="modal-dialog"></div>').appendTo(modal);
    var content = $('<div class="modal-content"></div>').appendTo(dialog);

    var header = $('<div class="modal-header"></div>').appendTo(content);
    $('<h5 class="modal-title">Choose Columns to Display</h5>').appendTo(header);
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
    $('<button type="button" class="btn btn-primary btn-apply-cols">Apply</button>').appendTo(footer);
  
  $(document).on('click', '.btn-apply-cols', function () {
    var modal = $('.modal');
    var selectedColumns = modal.find('input:checked').map(function () {
      return parseInt($(this).val());
    }).get();
    dt_user_table.DataTable().columns().visible(false);
    selectedColumns.forEach(function (columnIndex) {
      dt_user_table.DataTable().column(columnIndex).visible(true);
    });
    console.log(selectedColumns)
    modal.modal('hide');
  });
});


function editEmployee(id){
  window.location.href= baseUrl + 'cv/gestion/edit/'+id;
}

