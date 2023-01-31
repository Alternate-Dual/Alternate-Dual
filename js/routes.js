const express = requiere('express')
const routes = express.Router()

routes.get("/menunutricionista", function(request, response){ //Renderizado de páginas mustache (uno por plantilla)
    response.render('menu_nutricionista');
})

module.exports = routes