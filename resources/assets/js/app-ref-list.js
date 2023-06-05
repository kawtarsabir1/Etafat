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
      ajax: baseUrl + 'cv/getRefs', // JSON file to add data
      columns: [
        // columns according to JSON
        // { data: '' },
        { data: 'nRef' },
        { data: 'societe' },
        { data: 'client' },
        { data: 'nMarche' },
        { data: 'nMarche' },
        { data: 'mantant' },
        { data: 'category' },
        { data: 'fiche' },
        { data: 'action' },
      ],
      columnDefs: [
        {
          // Plans
          targets: 0,
          render: function (data, type, full, meta) {
            var nRef = full['nRef'];

            return '<span class="fw-normal h6">' + nRef + '</span>';
          }
        },
        {
          // Plans
          targets: 1,
          render: function (data, type, full, meta) {
            var societe = full['societe'];

            return '<span class="fw-normal h6">' + societe + '</span>';
          }
        },
        {
          // Plans
          targets: 2,
          render: function (data, type, full, meta) {
            var client = full['client'];

            return '<span class="fw-normal h6">' + client + '</span>';
          }
        },
        {
          // Plans
          targets: 3,
          render: function (data, type, full, meta) {
            var nMarche = full['nMarche'];

            return '<span class="fw-normal h6">' + nMarche + '</span>';
          }
        },
        {
          // Plans
          targets: 4,
          render: function (data, type, full, meta) {
            var annee = full['annee'];
            return '<span class="fw-normal h6">' + annee + '</span>';
          }
        },
        {
          // Plans
          targets: 5,
          render: function (data, type, full, meta) {
            var mantant = full['mantant'];

            return '<span class="fw-normal h6">' + mantant + '</span>';
          }
        },
        {
          // Plans
          targets: 6,
          render: function (data, type, full, meta) {
            var category = full['category'];

            return '<span class="fw-normal h6 ">' + category + '</span>';
          }
        }, 
        {
          // Plans
          targets: 7,
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
              '<a href="javascript:;" class="text-body dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-sm mx-1"></i></a>' +
              '<div class="dropdown-menu dropdown-menu-end m-0">' +
              '<a href="' +
              full['ID_Ref']+
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
        sLengthMenu: '_MENU_',
        search: '',
        searchPlaceholder: 'Recherche ...'
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
              text: '<i class="ti ti-copy me-2" ></i>Archived Refs',
              className: 'dropdown-item',
              attr: {
                onclick: 'window.location.href="' + baseUrl + 'cv/references/archived"'
              }
            }
          ]
        },
        {
          text: '<i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Nouvelle référence</span>',
          className: 'btn btn-primary btn-gradient',
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
                select.append('<option value="' + d + '">' + d + '</option>');
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
          .columns(6)
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
});


function editEmployee(id){
  window.location.href= baseUrl + 'cv/reference/edit/'+id;
}

function openPdf(fiche){
  var modal = $("#exLargeModal");
  var link = baseUrl+"../storage/fiches/"+fiche;
  modal.find('iframe').attr('src', link);
  modal.modal("show");
}
