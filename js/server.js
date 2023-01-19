var db_opts = { //SQL
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'php'
  }

var db_table = "crud"


let express = require('express');
let mustacheExpress = require('mustache-express');
let bodyParser = require('body-parser');
let app = express();



app.set('views', `${__dirname}/views`);
app.set('view engine', 'mustache');
app.engine('mustache', mustacheExpress());
app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static('public'));

const mysql = require('mysql') //SQL
const connection = mysql.createConnection(db_opts)
connection.connect()

app.get("/datoscontacto", function(request, response){ //Renderizado de páginas mustache (uno por plantilla), "127.0.0.1:3000/datoscontacto"
    response.render('datos_contacto_nutri', { tel: 'Hey', email: 'Hello there!'});
})

app.get("/echo/:a", function(request, response){ //Desbuggear plantillas (Ver si nos coge los parametros o no)
    console.log(request)
    response.send(request.params.a)
});

//SQL
app.get("/crud/:user", function(request,response){
    const user = parseInt(request.params.user)
    var tel =""
    var email=""
    connection.query("select * from "+db_table+" where ID=?",[user], function(err, rows){
        if (err) throw err;
        tel = rows[0].Apellido
        email = rows[0].Nombre
    })
    response.render('datos_contacto_nutri', { tel: tel, email: email});
})

//Puerto express
app.listen(3000, function () {
    console.log("Server started");
});