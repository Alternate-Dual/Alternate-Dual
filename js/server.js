let express = require('express');
let mustacheExpress = require('mustache-express');
let bodyParser = require('body-parser');
const res = require('express/lib/response');
let app = express();

const routes = require('./routes')

app.set('views', `${__dirname}/views`);
app.set('view engine', 'mustache');
app.engine('mustache', mustacheExpress());
app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static('public'));

//Conexion BDD---------------------------------
const mysql = require('mysql')  
const myconn = require('express-myconnection')
const dbOptions = {
    host: 'localhost',
    port: 3307,
    user: 'root',
    password: '',
    database: 'nutrifit'
}

// Middlewares (conector)----------------------
app.use(myconn(mysql, dbOptions, 'single'))

// Arrancar servidor ---------------------------
app.listen(3000, function () {
    console.log("Servidor arrancado");
});

// Rutas ---------------------------------------
app.get('/', (req, res)=>{
    res.send('Bienvenido a mi API')
})
app.use('/api', routes) //Llama a las rutas de las plantillas mustache

app.get("/echo/:a", function(request, response){ //Desbuggear plantillas (Ver si nos coge los parametros o no)
    console.log(request)
    response.send(request.params.a)
});