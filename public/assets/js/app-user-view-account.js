/**
 * App User View - Account (jquery)
 */

$(function () {
  'use strict';

  // Variable declaration for table
  var dt_project_table = $('.datatable-project'),
    dt_invoice_table = $('.datatable-invoice'),
    id = dt_project_table.attr('id');


  // Project datatable
  // --------------------------------------------------------------------
  if (dt_project_table.length) {
    var dt_project = dt_project_table.DataTable({
      ajax: baseUrl+ 'cv/projets/'+id,
      columns: [
        // columns according to JSON
        { data: '' },
        { data: 'objet' },
        { data: 'client' },
        { data: 'poste' },
        { data: 'annee' }
      ],
      columnDefs: [
        {
          // For Responsive
          className: 'control',
          searchable: false,
          responsivePriority: 2,
          targets: 0,
          render: function (data, type, full, meta) {
            return '';
          }
        },
        {
          // User full name and email
          targets: 1,
          responsivePriority: 1,
          render: function (data, type, full, meta) {
            let objet = full['objet'];
            let max = 45;
            if (objet.length > max) {
              objet = objet.substr(0, max) + '...';
            }
            return ("<span class='fw-bold'>" + objet + "</span>");
          }
        },
        {
          targets: 2,
        },
        {
          // Label
          targets: -2,
          responsivePriority: 3
        },
        {
          targets: -1,
        }
      ],
      order: [[1, 'desc']],
      dom:
        '<"d-flex justify-content-between align-items-center flex-column flex-sm-row mx-4 row"' +
        '<"col-sm-4 col-12 d-flex align-items-center justify-content-sm-start justify-content-center"l>' +
        '<"col-sm-8 col-12 d-flex align-items-center justify-content-sm-end justify-content-center"f>' +
        '>t' +
        '<"d-flex justify-content-between mx-4 row"' +
        '<"col-sm-12 col-md-6"i>' +
        '<"col-sm-12 col-md-6"p>' +
        '>',
      displayLength: 5,
      lengthMenu: [5, 10, 15, 20],
      language: {
        sLengthMenu: 'Montrer _MENU_',
        search: 'Rechercher :',
        zeroRecords: 'Aucun enregistrement correspondant trouvé',
        emptyTable: 'Aucune donnée disponible',
        searchPlaceholder: 'Rechercher un projet',
        paginate:{
          next : "Suivant",
          previous : "Précédent"
        },
        loadingRecords: 'Chargement ...',
        infoEmpty: "Aucun enregistrement disponible",
        infoFiltered: "(filtré sur _MAX_ enregistrements au total)",
        info: "Affichage de _START_ à _END_ sur _TOTAL_ enregistrements",
      },
      // For responsive popup
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal({
            header: function (row) {
              var data = row.data();
              return 'Details of ' + data['full_name'];
            }
          }),
          type: 'column',
          renderer: function (api, rowIdx, columns) {
            var data = $.map(columns, function (col, i) {
              return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
                ? '<tr data-dt-row="' +
                    col.rowIndex +
                    '" data-dt-column="' +
                    col.columnIndex +
                    '">' +
                    '<td>' +
                    col.title +
                    ':' +
                    '</td> ' +
                    '<td>' +
                    col.data +
                    '</td>' +
                    '</tr>'
                : '';
            }).join('');

            return data ? $('<table class="table"/><tbody />').append(data) : false;
          }
        }
      }
    });
  }

  // Invoice datatable
  // --------------------------------------------------------------------
  // On each datatable draw, initialize tooltip
  dt_invoice_table.on('draw.dt', function () {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl, {
        boundary: document.body
      });
    });
  });

  // Filter form control to default size
  // ? setTimeout used for multilingual table initialization
  setTimeout(() => {
    $('.dataTables_filter .form-control').removeClass('form-control-sm');
    $('.dataTables_length .form-select').removeClass('form-select-sm');
  }, 300);
});
