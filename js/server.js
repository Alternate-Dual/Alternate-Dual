let express = require('express');
let mustacheExpress = require('mustache-express');
let bodyParser = require('body-parser');
let app = express();

const res = require('express/lib/response');
const routes = require('./routes');
const { engine } = require('express-handlebars');
const session = require('express-session');

app.set('views', `${__dirname}/views`);
app.set('view engine', 'mustache');
app.engine('mustache', mustacheExpress());
app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static('public'));

//Conexion BDD y sesiones---------------------------------
//const mysql = require('mysql')  
//const myconn = require('express-myconnection')
//const dbOptions = {
    //host: 'localhost',
  //  port: 3307,
  //  user: 'root',
 //   password: '',
  //  database: 'nutrifit'
//}

app.use(session({
    secret: 'secret',
    resave: true,
    saveUninitialized: true
}));

// Middlewares (conector)----------------------
// app.use(myconn(mysql, dbOptions, 'single'))

// Arrancar servidor ---------------------------
app.listen(3000, function () {
    console.log("Servidor arrancado");
});

// Rutas ---------------------------------------
app.get('/', (req, res)=>{
    res.send('Bienvenido a mi API')
})
app.use('/api', routes) //Llama a las rutas de las plantillas mustache

app.get("/menunutricionista", function(request, response){ 
    response.render('menu_nutricionista');
})

app.get("/menupaciente", function(request, response){
    response.render('menu_paciente');
})

app.get("/menuadmin", function(request, response){
    response.render('menu_admin');
})

app.get("/login", function(request, response){
    response.render('login');
})

app.get("/registro_nutricionista", function(request, response){
    response.render('registro_nutricionista');
})

app.get("/index_nutricionista", function(request, response){
    response.render('index_nutricionista');
})

app.get("/index_paciente", function(request, response){
    response.render('index_paciente');
})

app.get("/index_admin", function(request, response){
    response.render('index_admin');
})

app.get("/perfil_nutricionista", function(request, response){
    response.render('perfil_nutricionista');
})

app.get("/perfil_paciente", function(request, response){
    response.render('perfil_paciente', {peso:'60kg'});
})

app.get("/administrar_nutricionistas", function(request, response){
    response.render('administrar_nutricionistas');
})

app.get("/nutricionista_menu", function(request, response){
    response.render('nutricionista_menu');
})

app.get("/menu_semanal_nutri_cliente", function(request, response){
    response.render('menu_semanal_nutri_cliente');
})

app.get("/receta_categoria_nutri", function(request, response){
    response.render('receta_categoria_nutri');
})

app.get("/crear_receta_nutri", function(request, response){
    response.render('crear_receta_nutri');
})

app.get("/dietas_semana_paciente", function(request, response){
    response.render('dietas_semana_paciente');
})

app.get("/receta_desayuno_paciente", function(request, response){
    response.render('receta_desayuno_paciente');
})

app.get("/script", function(request, response){
    response.render('script');
})

app.get("/echo/:a", function(request, response){ //Desbuggear plantillas (Ver si nos coge los parametros o no)
    console.log(request)
    response.send(request.params.a)
});