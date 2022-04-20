require('./bootstrap');

var axios = require('axios');

$(() => {
  listUsers();

  function listUsers() {
    var url = '/api/v1/user/list';
    var body = {
      page: 1,
      perPage: 10,
      orderBy: 'display_name',
      sort: 'asc',
      fields: ['ID', 'user_email', 'display_name'],
    };
    axios
      .post(url, body)
      .then((res) => {
        console.log('--res--');
        console.log(res);
      })
      .catch((err) => {
        console.log('--er--');
        console.log(err);
      })
  }
});