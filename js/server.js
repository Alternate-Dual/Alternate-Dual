let express = require('express');
let mustacheExpress = require('mustache-express');
let bodyParser = require('body-parser');
const res = require('express/lib/response');
let app = express();


app.set('views', `${__dirname}/views`);
app.set('view engine', 'mustache');
app.engine('mustache', mustacheExpress());
app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static('public'));

//Puerto express
app.listen(3000, function () {
    console.log("Server started");
});

//Prueba API

app.get('/', (req, res)=>{
    res.send('Welcome to my API')
})

///////

app.get("/datoscontacto", function(request, response){ //Renderizado de páginas mustache (uno por plantilla), "127.0.0.1:3000/datoscontacto" 
    response.render('datos_contacto_nutri', { tel: 'Hey', email: 'Hello there!'}); //Ejemplo
})


app.get("/menunutricionista", function(request, response){ //Renderizado de páginas mustache (uno por plantilla)
    response.render('menu_nutricionista');
})

app.get("/menupaciente", function(request, response){ //Renderizado de páginas mustache (uno por plantilla)
    response.render('menu_paciente');
})

app.get("/login", function(request, response){ //Renderizado de páginas mustache (uno por plantilla)
    response.render('login');
})

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

app.get("/echo/:a", function(request, response){ //Desbuggear plantillas (Ver si nos coge los parametros o no)
    console.log(request)
    response.send(request.params.a)
});