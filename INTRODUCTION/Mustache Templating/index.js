var express = require('express');
var mustachExpress = require('mustache-express');

const app = express();
app.engine('mustache', mustachExpress());

app.set('view engine', 'mustache');
app.set('views', __dirname + '/views');

app.get('/', function(req, res) {
  var data = {
    todos: [
      'delectus aut autem',
      'quis ut nam facilis et officia qui',
      'fugiat veniam minus',
      'et porro tempora',
      'laboriosam mollitia et enim quasi adipisci quia provident illum'
    ]
  };
  res.render('index', data);
});

app.listen(3000);
