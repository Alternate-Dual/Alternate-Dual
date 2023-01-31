let express = require('express');
let mustacheExpress = require('mustache-express');
let bodyParser = require('body-parser');
const res = require('express/lib/response');
let app = express();

const mysql = require('mysql')  //Conexion BDD
const myconn = require('express-myconnection')
const dbOptions = {
    host: 'localhost',
    port: 3306,
    user: 'root',
    password: '',
    database: 'nutrifit'
}

app.set('views', `${__dirname}/views`);
app.set('view engine', 'mustache');
app.engine('mustache', mustacheExpress());
app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static('public'));

const routes = require('./routes')

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

app.use('/menunutricionista', routes)


app.get("/echo/:a", function(request, response){ //Desbuggear plantillas (Ver si nos coge los parametros o no)
    console.log(request)
    response.send(request.params.a)
});

app.get("/menupaciente", function(request, response){ //Renderizado de páginas mustache (uno por plantilla)
    response.render('menu_paciente');
})

app.get("/login", function(request, response){ //Renderizado de páginas mustache (uno por plantilla)
    response.render('login');
})

app.get("/datoscontacto", function(request, response){ //Renderizado de páginas mustache (uno por plantilla), "127.0.0.1:3000/datoscontacto" 
    response.render('datos_contacto_nutri', { tel: 'Hey', email: 'Hello there!'}); //Ejemplo
})
