$(document).ready(function() {
    var mision = 'Servicio Trejo es una empresa la cual está enfocada a soporte y mantenimiento de las tecnologías de la información y la comunicación. Nuestro trabajo es satisfacer las necesidades de nuestros clientes, brindándoles un producto de calidad y un excelente servicio.';
    var vision = 'En Servicio Trejo nos interesa el dar satisfacción a nuestros clientes, es por eso que en nuestra empresa nos regimos con leyes de trabajo muy estrictas, las cuales nos han permitido ir creciendo a lo largo de estos años, y gracias a nuestro trabajo y empeño, Servicio Trejo poco a poco se va haciendo más reconocida. Es eso lo que nos motiva a seguir adelante y cada día tratar de ser la mejor empresa en servicio de computación, y algún día, llegar a ser una empresa reconocida a nivel nacional.';
    /*Datos originales*/
    var imagenOriginal = $('#imagenPrincipal').attr('src');
    var tituloPrincipal = $('#titulo').text();
    var textoOriginal = $('#textoPrincipal').text();
    /*FIN DE originales*/
    $('.contenedorImagen').hover(function() {
        var ruta = $('img', this).attr('src');
        var alt = $('img', this).attr('alt');
        switch (alt) {
            case 'resumen':
                $('#titulo').text(tituloPrincipal);
                $('#textoPrincipal').text(textoOriginal);
                break;
            case 'mision':
                $('#titulo').text('MISION');
                $('#textoPrincipal').text(mision);
                break;
            case 'vision':
                $('#titulo').text('VISION');
                $('#textoPrincipal').text(vision);
                break;
            case 'objetivo':
                $('#titulo').text('OBJETIVO');
                $('#textoPrincipal').text(textoOriginal);
                break;
        }
        $('#imagenPrincipal').attr('src', ruta);
    });
});