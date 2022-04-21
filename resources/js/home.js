require('./bootstrap');

var _table = $('#table');
var _loading = $('#loading');

listUsers();

function listUsers() {
  _table.DataTable({
    serverSide: true,
    processing: true,
    ajax: "/api/v1/user/list-datatable",
    columns: [
      { data: 'ID' },
      { data: 'user_login' },
      { data: 'display_name' },
      { data: 'user_email' },
      { data: 'user_registered' },
      { data: 'user_status' },
      { data: 'action' },
    ],
  });
}
