require('./bootstrap');

var axios = require('axios');

$(() => {
  var table = $('#tableUsers tbody');

  listUsers();

  function listUsers() {
    var url = '/api/v1/user/list';
    var body = {
      page: 1,
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
        if (res.data) {
          var data = res.data;
          if (data.data?.length) {
            var items = data.data;
            var strHtml = '';
            items.forEach((item) => {
              var color = item.user_status === 0 ? 'accent' : 'primary';
              var status = item.user_status === 0 ? 'Activo' : 'Inactivo';
              strHtml += `
                <tr class="hover cursor-pointer">
                  <td>${item.user_login}</td>
                  <td>${item.display_name}</td>
                  <td>${item.user_email}</td>
                  <td>${item.user_registered}</td>
                  <td><span class="badge badge-${color}">${status}</span></td>
                </tr>
              `
            });
            table.append(strHtml);
          } else {
            console.log('---array vacio--');
          }
        } else {
          console.log('---no hay data---');
        }
      })
      .catch((err) => {
        console.log('--er--');
        console.log(err);
      })
  }
});