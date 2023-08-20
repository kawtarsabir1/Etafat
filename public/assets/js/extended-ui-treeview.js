/**
 * Treeview (jquery)
 */

'use strict';

$(function () {
  var theme = $('html').hasClass('light-style') ? 'default' : 'default-dark',
    checkboxTree = $('#jstree-checkbox');

  if (checkboxTree.length) {
    checkboxTree.jstree({
      core: {
        themes: {
          name: theme,
        },
        data: {
            //get data from database
            url: baseUrl + 'admin/gestion/permissions',
            dataType: 'json',
            type: 'GET'
        },
        worker: false
      },
      plugins: ['types', 'checkbox','search'],
      types: {
        default: {
          icon: 'ti ti-app-window text-warning'
        }
      }
    });
  }

 
});
