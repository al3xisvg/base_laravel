require('./bootstrap');

var axios = require('axios');

var _table = $('#table tbody');
var _paginate = $('#tablePagination');
var _loading = $('#loading');

listUsers(1);

function listUsers(page) {
  _loading.show();
  var url = '/api/v1/user/list';
  var body = {
    page,
    perPage: 10,
    orderBy: 'display_name',
    sort: 'asc',
    fields: [
      'ID',
      'user_login',
      'display_name',
      'user_email',
      'user_registered',
      'user_status'
    ],
  };
  axios
    .post(url, body)
    .then((res) => {
      _loading.hide();
      if (res.data) {
        if (res.data.data?.length) {
          var { data, ...pagination } = res.data;
          fillTable(_table, data)
          fillPaginate(_paginate, pagination)
        } else {
          console.log('---array vacio--');
        }
      } else {
        console.log('---no hay data---');
      }
    })
    .catch((err) => {
      _loading.hide();
      console.log('--er--');
      console.log(err);
    })
}

function fillTable(table, data) {
  var rows = '';
  data.forEach((item) => {
    var color = item.user_status === 0 ? 'accent' : 'primary';
    var status = item.user_status === 0 ? 'Activo' : 'Inactivo';
    rows += `
      <tr class="hover cursor-pointer">
        <td>${item.user_login}</td>
        <td>${item.display_name}</td>
        <td>${item.user_email}</td>
        <td>${item.user_registered}</td>
        <td><span class="badge badge-${color}">${status}</span></td>
      </tr>
    `
  });
  table.append(rows);
}

function fillPaginate(paginate, pagination) {
  var pages = Math.ceil(pagination.total/pagination.perPage);
  var btns = '';
  for (var i=0; i < pages; i++) {
    var active = i+1 === pagination.page ? 'btn-active' : ''
    btns += `<button id="page${i+1}" class="btn ${active}">${i+1}</button>`
  }
  paginate.html(btns);
}
