$(document).ready(function() {
    /*Categoria inicial*/
    var categoria = $('.carousel-item.active').attr('categoria');
    $('#categorias').load('/Productos/categoria/' + categoria);
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
});