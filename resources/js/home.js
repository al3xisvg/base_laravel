require('./bootstrap');
var moment = require('moment')

var _table = $('#table');
var _loading = $('#loading');

listUsers();

function listUsers() {
  _loading.show();
  _table.DataTable({
    serverSide: true,
    processing: false,
    ajax: "/api/v1/user/list-datatable",
    columns: [
      { data: 'ID' },
      { data: 'user_login' },
      { data: 'display_name' },
      { data: 'user_email' },
      {
        data: 'user_registered',
        render: function (data, type) {
          if (type === 'display') {
            return moment(data).format('YYYY/MM/DD');
          }
          return data;
        }
      },
      {
        data: 'user_status',
        render: function (data, type) {
          if (type === 'display') {
            var status = data === 0 ? 'Activo' : 'Inactivo';
            return `<div class="badge badge-primary">${status}</div>`;
          }
          return data;
        }
      },
      { data: 'action' },
    ],
    /*createdRow: function(row, data, dataIndex) {
      $(row).addClass('red');
    }*/
    language: {
      lengthMenu: 'Mostrar _MENU_ reg/pág',
      zeroRecords: 'No hay datos disponibles',
      info: 'Registro _START_ de _END_ de _TOTAL_',
      infoEmpty: 'No hay datos disponibles',
      paginate: {
        previous: 'Anterior',
        next: 'Siguiente',
      },
      search: 'Buscar: ',
      select: {
        rows: '- %d registros seleccionados',
      },
      infoFiltered: '(Filtrado de _MAX_ registros)',
    },
    // dom: 'Bfrtip',
    scrollY: "52vh",
    scrollCollapse: true,
    initComplete: function() {
      _loading.hide();
    }
  });
}
