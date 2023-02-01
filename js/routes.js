const express = require('express')
const routes = express.Router()

routes.get('/', (req, res)=>{
    res.send('raiz de routes')
})

//------------------------------------------------------------------------------------------------------------------------------------------------------------

routes.get("/datoscontacto", function(request, response){ // EJEMPLO **Renderizado de páginas mustache (uno por plantilla), "127.0.0.1:3000/datoscontacto"**
    response.render('datos_contacto_nutri', { tel: 'Hey', email: 'Hello there!'});
})


//------------------------------------------------------------------------------------------------------------------------------------------------------------

module.exports = routes