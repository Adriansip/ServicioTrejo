$(document).ready(function() {
    /*Categoria inicial*/
    var categoria = $('.carousel-item.active').attr('categoria');
    getDatosCategoria(categoria);
    /*Desactivar transicion automatica*/
    $('.carousel').carousel({
        interval: false,
    });
    /*Este evento se ejecuta despues de que termina la transicion*/
    $('.carousel').on('slid.bs.carousel', function() {
        //Obtenemos la categoria        
        categoria = $('.carousel-item.active').attr('categoria');
        $('#categorias').load('/Productos/categoria/' + categoria);
    });
    $('#buscador').on('click', function() {
        var marca = $('#marca').val();
        var precio = $('#precio').val();
        var dato = $('#datoBusqueda').val();
        if (precio == '') {
            precio = 0;
        }
        if (dato == '') {
            dato = 0;
        }
        $('#categorias').load('/Productos/categoria/' + categoria + '/' + marca + '/' + precio + '/' + dato);
    });

    function getDatosCategoria(categoria) {
        $('#categorias').load('/Productos/categoria/' + categoria);
    }
});